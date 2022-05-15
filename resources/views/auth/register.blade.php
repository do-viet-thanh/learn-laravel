@extends('auth.auth')

@section('tittle')
    Register
@endsection

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark p-t-40">
        <div class="auth-box bg-dark border-top border-secondary p-40">
            <div>
                <div class="text-center p-b-5">
                  <span class="db">
                      <h2 class="text-white">Đăng ký tài khoản</h2>
                  </span>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-3" action="index.html">
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-success text-white h-100" id="basic-addon1">
                                      <i class="mdi mdi-account fs-4"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required/>
                            </div>
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-danger text-white h-100" id="basic-addon1">
                                      <i class="mdi mdi-email fs-4"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required/>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                                      <i class="mdi mdi-lock fs-4"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Mật khẩu" aria-label="Password" aria-describedby="basic-addon1" required/>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-info text-white h-100" id="basic-addon2">
                                      <i class="mdi mdi-lock fs-4"></i>
                                  </span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Xác nhận mật khẩu" aria-label="Password" aria-describedby="basic-addon1" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3 d-grid">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">Tạo tài khoản</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="text-decoration-underline" href="{{route('backend.login.get')}}">Bạn đã có tài khoản? Đăng nhập.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

