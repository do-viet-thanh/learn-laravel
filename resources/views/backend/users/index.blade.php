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
                            <form class="mb-3 d-flex justify-content-between" id="form-search" action="{{route('backend.users.index')}}">
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
                                    <button type="submit" class="btn btn-secondary btn-sm btn-search">Tìm kiếm</button>
                                </div>
                                <a href="{{route('backend.users.create')}}">
                                    <button type="button" class="btn btn-outline-secondary mb-3 btn-sm btn-add">Thêm mới</button>
                                </a>
                            </form>
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
                                        <th class="null scope="col">Địa chỉ</th>
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
                                            <td class="null">{{ $item-> address }}</td>
                                            <td class="null">{{ $item-> phone_company }}</td>
                                            <td class="null">{{ $item-> hobbies }}</td>
                                            <td class="null">{{ $item-> introduction }}</td>
                                            <td>
                                                <div class="comment-footer d-flex">
                                                    <a style="margin-right: 2px; width: 51px;" href="{{route('backend.users.detail', ['id' => $item -> id])}}">
                                                        <button type="button" class="btn btn-success btn-xs text-white">Chi tiết</button>
                                                    </a>
                                                    <a style="margin-right: 2px" href="{{route('backend.users.edit', ['id' => $item -> id])}}">
                                                        <button type="button" class="btn btn-cyan btn-xs text-white">Sửa</button>
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
