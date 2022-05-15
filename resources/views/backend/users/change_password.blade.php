@extends("backend.layout.index")


@section('tittle')
    Đổi mật khẩu
@endsection

@section('page-tittle')
    Đổi mật khẩu
@endsection

@section('content')
    <div>
        <div class="card row align-items-center">
            <div class="card-body col-5">
                <form class="" action="{{route('backend.users.change_password')}}">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-4 control-label col-form-label">Mật khẩu hiện tại</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="fname" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-4 control-label col-form-label">Mật khẩu mới</label>
                        <div class="col-sm-8">
                            <input type="password" name="" class="form-control" id="fname" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-4 control-label col-form-label">Nhập lại mật khẩu mới</label>
                        <div class="col-sm-8">
                            <input type="password" name="" class="form-control" id="fname" placeholder=""/>
                        </div>
                    </div>
                </form>
                <div class="border-top">
                    <div class="card-body d-flex">
                        <a href="">
                            <button style="margin-right: 10px" type="button" class="btn btn-cyan text-white">
                                Lưu
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
