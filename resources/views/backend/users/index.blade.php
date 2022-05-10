@extends("backend.layout.index")

@section('tittle')
    Trang chủ
@endsection

@section('page-tittle')
    Danh sách người dùng
@endsection

@section('content')
    <div class="content-page teacher-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('backend.layout.include._notification')
                            <div class="card-body__head card-body__filter">
                                <h5 class="card-title bold">Bộ lọc</h5>
                            </div>

                            <!-- From search -->
                            <form class="mb-3 d-flex" id="form-search" action="{{route('backend.users.index')}}">
                                <div class="form-row d-flex">
                                    <div class="col-sm-1 col-md-1 m-r-10">
                                        <input type="text" name="id" class="form-control" placeholder="ID" value="{{request('id')}}">
                                    </div>
                                    <div class="col-sm-2 col-md-2 m-r-10">
                                        <input type="text" name="email" class="form-control" placeholder="email" value="{{request('email')}}">
                                    </div>
                                    <div class="col-sm-2 col-md-2 m-r-10">
                                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" value="{{request('phone')}}">
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-sm">Tìm kiếm</button>
                                </div>


                            </form>
                            <a href="{{route('backend.users.create')}}">
                                <button type="button" class="btn btn-outline-secondary mb-3 btn-sm">Thêm mới</button>
                            </a>
                            <div class="card-body__head d-flex">
                                <h5 class="card-title">Danh sách người dùng</h5>
                            </div>
                            <div id="zero_config_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <table class="table table-striped table-bordered dataTable" role="grid">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Ngày sinh</th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th class="null" scope="col">Loại điện thoại</th>
                                        <th class="null" scope="col">Sở thích</th>
                                        <th class="null" scope="col">Giới thiệu ngắn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item-> id }}</td>
                                            <td>{{ $item-> username }}</td>
                                            <td>{{ $item-> email }}</td>
                                            <td>{{ $item-> name }}</td>
                                            <td>{{ $item-> phone }}</td>
                                            <td>{{Carbon\Carbon::parse($item-> date_of_birth)->format('d-m-Y')}}</td>
                                            <td>{{ $item-> gender == \App\Models\User::GENDER_BOY ? 'Nam' : 'Nữ'}}</td>
                                            <td>{{ $item-> address }}</td>
                                            <td class="null">{{ $item-> phone_company }}</td>
                                            <td class="null">{{ $item-> hobbies }}</td>
                                            <td class="null">{{ $item-> introduction }}</td>
                                            <td>
                                                <div class="comment-footer d-flex">
                                                    <a href="{{route('backend.users.update', ['id' => $item -> id])}}">
                                                        <button type="button" class="btn btn-cyan btn-xs">Sửa</button>
                                                    </a>
                                                    <form method="post" action="{{route('backend.users.delete', ['id' => $item -> id])}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa không?')"
                                                                class="btn-danger btn btn-xs modal_confirm_delete rounded">
                                                            Xóa
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                                <!-- Pagination -->
                                {{-- {{ $users->links() }} --}}
                                {{ $data->appends(request()->input())->render('backend.layout.include._pagination')}}
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
