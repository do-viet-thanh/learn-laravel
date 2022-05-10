<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
//      $users = DB::table('users')->paginate(15);
//      return view('backend.users.home', ['users' => $users]);

        $query = User::select();

        if (request('id')) {
            $query->where('id', request('id'));
        }

        if(request('email')){
            $query->where('email', request('email'));
        }

        if(request('phone')){
            $query->where('phone', request('phone'));
        }

        $data = $query->paginate(config('constant.BACKEND_PAGINATE'));

        return view('backend.users.index', ['data' => $data]);

    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' =>   [
                'required',
                'regex:/^([a-zA-Z]+)(\d+)?$/',
                'min:6',
            ],
            'username' => 'required|unique:users|max:255',
        ]);
        $user = new User();
        $user->email = request('email');
        $user->username = request('username');
        $user->password = bcrypt(request('password'));
        $user->name = request('name');
        $user->gender = request('gender');
        $user->hobbies = request('hobbies');
        $user->phone = request('phone');
        $user->address = request('address');
        $user->date_of_birth = request('date_of_birth');
        $user->phone_company = request('phone_company');
        $user->introduction = request('introduction');

        $user -> save();
        return redirect()->route('backend.users.index')->with('notification_success','Thêm mới người dùng thành công');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);

        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('backend.users.update', compact('users'));
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' =>   [
                'nullable',
                'regex:/^([a-zA-Z]+)(\d+)?$/',
                'min:6',
            ],
            'username' => 'required|unique:users|max:255',
        ]);
        // gán dữ liệu gửi lên vào biến data
//        $data = $request->all();

        $data = [
            'email' => request('email'),
            'username' => request('username'),
            'password' => request('password'),
            'name' => request('name'),
            'gender' => request('gender'),
            'hobbies' => request('hobbies'),
            'phone' => request('phone'),
            'address' => request('address'),
            'date_of_birth' => request('date_of_birth'),
            'phone_company' => request('phone_company'),
            'introduction' => request('introduction'),
        ];
        // Update user
        User::findOrFail($id)->update($data);
        return redirect()->route('backend.users.update')->with('notification_success','Update thành công');
    }

    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back()->with('notification_success', 'Xóa thành công');
    }
}
