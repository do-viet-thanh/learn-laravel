@extends("index")


@section('tittle')
    Home
@endsection

@section('page-tittle')
    List users
@endsection

@section('content')
    <div class="content-page teacher-page">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Người dùng</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="card-body__head card-body__filter">
                                <h5 class="card-title bold">Bộ lọc</h5>
                            </div>

                            <!-- From search -->
                            <form class="mb-3 d-flex" id="form-search">
                                <div class="form-row d-flex">
                                    <div class="col-md-2 m-r-10">
                                        <input type="text" name="id" class="form-control" placeholder="ID" value="">
                                    </div>
                                    <div class="col-md-3 m-r-10">
                                        <input type="text" name="username" class="form-control" placeholder="Tên" value="">
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-sm">Tìm kiếm</button>
                                </div>


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
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Sở thích</th>
                                        <th scope="col">Giới thiệu ngắn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="comment-footer d-flex">
                                                    <a>
                                                        <button type="button" class="btn btn-cyan btn-xs">Sửa</button>
                                                    </a>
                                                    <form method="post">
                                                        <button type="submit"
                                                                class="btn-danger btn btn-xs modal_confirm_delete rounded">
                                                            Xóa
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
