@extends('auth.auth')

@section('tittle')
    Login
@endsection

@section('content')
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div id="loginform">
                <div class="text-center pt-3 pb-3">
              <span class="db">
                  <img src="{{asset('assets/images/logo.png')}}" alt="logo"/>
              </span>
                </div>
                <!-- Form -->
                <form class="form-horizontal mt-3" id="loginform" action="index.html">
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
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    placeholder="Username"
                                    aria-label="Username"
                                    aria-describedby="basic-addon1"
                                    required=""
                                />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                      <span class="input-group-text bg-warning text-white h-100" id="basic-addon2">
                          <i class="mdi mdi-lock fs-4"></i>
                      </span>
                                </div>
                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    placeholder="Password"
                                    aria-label="Password"
                                    aria-describedby="basic-addon1"
                                    required=""
                                />
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="pt-3">
                                    <button
                                        class="btn btn-info"
                                        id="to-recover"
                                        type="button"
                                    >
                                        <i class="mdi mdi-lock fs-4 me-1"></i> Lost password?
                                    </button>
                                    <button
                                        class="btn btn-success float-end text-white"
                                        type="submit"
                                    >
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="recoverform">
                <div class="text-center">
              <span class="text-white"
              >Enter your e-mail address below and we will send you
                instructions how to recover a password.</span
              >
                </div>
                <div class="row mt-3">
                    <!-- Form -->
                    <form class="col-12" action="index.html">
                        <!-- email -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                    <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                    ><i class="mdi mdi-email fs-4"></i
                        ></span>
                            </div>
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Email Address"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                            />
                        </div>
                        <!-- pwd -->
                        <div class="row mt-3 pt-3 border-top border-secondary">
                            <div class="col-12">
                                <a
                                    class="btn btn-success text-white"
                                    href="#"
                                    id="to-login"
                                    name="action"
                                >Back To Login</a
                                >
                                <button
                                    class="btn btn-info float-end"
                                    type="button"
                                    name="action"
                                >
                                    Recover
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
