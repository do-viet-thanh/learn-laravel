@extends('auth.auth')

@section('tittle')
    Login
@endsection

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark  p-40">
        <div class="auth-box bg-dark border-top border-secondary p-40">
            <div id="loginform" class="p-40">
                <div class="text-center pt-3 pb-3">
              <span class="db">
                  <img src="{{asset('assets/images/logo.png')}}" alt="logo"/>
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
                      <span
                              class="input-group-text bg-success text-white h-100"
                              id="basic-addon1"
                      ><i class="mdi mdi-account fs-4"></i
                          ></span>
                                </div>
                                <input value="{{ old('email') }}"
                                       type="email"
                                       class="form-control form-control-lg"
                                       placeholder="Email"
                                       required=""
                                       name="email"
                                />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                      <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                          <i class="mdi mdi-lock fs-4"></i>
                      </span>
                                </div>
                                <input
                                        type="password"
                                        class="form-control form-control-lg"
                                        placeholder="Password"
                                        required=""
                                        name="password"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-4">
                                    <button class="btn btn-success text-white" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
