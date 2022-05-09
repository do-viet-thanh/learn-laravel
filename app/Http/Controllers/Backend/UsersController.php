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

    public function store()
    {
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
        $user = User::where('id',$id);
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
        return redirect()->route('backend.users.index')->with('notification_success','Chỉnh sửa người dùng thành công');

    }

    public function update($id)
    {
        return view('backend.users.update');
    }

    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back()->with('notification_success', 'Xóa thành công');
    }
}
