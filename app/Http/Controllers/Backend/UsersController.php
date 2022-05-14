<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    public function index()
    {
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

        $data = $query->orderBy('id', 'desc')->paginate(config('constant.BACKEND_PAGINATE'));

        return view('backend.users.index', ['data' => $data]);

    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        try {
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

            if (request()->hasFile('avatar')) {
                $fileName = time() . "_" . request()->file('avatar')->getClientOriginalName();
                $pathTmp = 'backend/uploads/users';
                $uploadPath = public_path($pathTmp); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('avatar')->move($uploadPath, $fileName);
                $user->avatar = $pathTmp . '/' . $fileName;
            }

            $user -> save();

            return redirect()->route('backend.users.index')->with('notification_success','Thêm mới người dùng thành công');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->route('backend.users.index')->with('notification_error', 'Lỗi hệ thống');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        return view('backend.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request ,$id)
    {
        try {
            $user = User::where('id', $id)->first();
            if (empty($user)) {
                return redirect()->route('backend.users.index')->with('notification_error', 'Lỗi hệ thống');
            }

            $params = $request->all();

            if (request()->hasFile('avatar')) {
                $fileName = time() . "_" . request()->file('avatar')->getClientOriginalName();
                $pathTmp = 'backend/uploads/users';
                $uploadPath = public_path($pathTmp); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('avatar')->move($uploadPath, $fileName);
                $params['avatar'] = $pathTmp . '/' . $fileName;

                // Remove old file
                $oldImage = $user->avatar;
                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }
            User::findOrFail($id)->update($params);
            return redirect()->route('backend.users.index')->with('notification_success', 'Update thành công');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->route('backend.users.index')->with('notification_error', 'Lỗi hệ thống');
        }
    }

    public function delete($id)
    {
        try {
            User::where('id',$id)->delete();
            return redirect()->back()->with('notification_success', 'Xóa thành công');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->route('backend.users.index')->with('notification_error', 'Lỗi hệ thống');
        }
    }
}
