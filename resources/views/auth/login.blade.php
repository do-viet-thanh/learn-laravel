@extends('auth.auth')

@section('tittle')
    Login
@endsection

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark  p-40">
        <div class="auth-box bg-dark border-top border-secondary p-40">
            <div id="loginform" class="p-40">
                <div class="text-center p-b-5">
                  <span class="db">
                      <h2 class="text-white">Đăng nhập</h2>
                  </span>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-3 p-b-40" id="loginform" action="{{ route('backend.login.post') }}"
                      method="post">
                    @csrf
                    @include('backend.layout.include._notification')
                    <div class="row pb-4">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-success text-white h-100" id="basic-addon1">
                                      <i class="mdi mdi-account fs-4"></i>
                                  </span>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required=""
                                       value="{{ old('email') }}"/>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                                      <i class="mdi mdi-lock fs-4"></i>
                                  </span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Mật khẩu"
                                       aria-label="Password" aria-describedby="basic-addon1" required=""/>
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-4">
                                    <button class="btn btn-info" id="to-recover" type="button">
                                        <i class="mdi mdi-lock fs-4 me-1"></i>Quên mật khẩu?
                                    </button>
                                    <button style="height: 42px" class="btn btn-success float-end text-white" type="submit">Đăng nhập</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="text-decoration-underline" href="{{route('backend.register')}}">Tạo tài khoản mới</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
