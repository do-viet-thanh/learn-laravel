@extends("backend.layout.index")


@section('tittle')
    Chi tiết người dùng
@endsection

@section('page-tittle')
    Chi tiết người dùng
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <form class="row" action="{{route('backend.users.detail', ['id' => $user -> id])}}">
                    <div class="col-md-6">
                        <div class="card">
                            <table class="table">
                                <div class="row">
                                    <label class="col-6">Ảnh đại diện</label>
                                    <img class="col-6" src="">
                                </div>
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>Username</td>
                                    <td>{{$user -> username}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$user -> email}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <table class="table">

                                <tbody>
                                <tr>
                                    <td>Họ tên</td>
                                    <td>{{$user -> name}}</td>
                                </tr>
                                <tr>
                                    <td>Giới tính</td>
                                    <td>{{$user -> gender == \App\Models\User::GENDER_BOY ? 'Nam' : 'Nữ'}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày sinh</td>
                                    <td>{{ date('d-m-Y', strtotime($user -> date_of_birth)) }}</td>
                                </tr>
                                <tr>
                                    <td>Loại điện thoại</td>
                                    <td>{{$user -> phone_company}}</td>
                                </tr>
                                <tr>
                                    <td>Sở thích</td>
                                    <td>{{$user -> hobbies}}</td>
                                </tr>
                                <tr>
                                    <td>Introduction</td>
                                    <td>{{$user -> introduction}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
                <div class="border-top">
                    <div class="card-body d-flex">
                        <a href="{{route('backend.users.edit', ['id' => $user -> id])}}">
                            <button style="margin-right: 10px" type="button" class="btn btn-cyan text-white">
                                Chỉnh sửa
                            </button>
                        </a>
                        <form action="{{route('backend.users.delete', ['id' => $user -> id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa?')">
                                Xóa
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
