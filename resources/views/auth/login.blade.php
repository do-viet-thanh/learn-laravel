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
                <form class="form-horizontal mt-3 p-b-40" id="loginform" action="index.html">
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
                                    placeholder="Email"
                                    aria-label="Email"
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
                                <div class="pt-4">
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
                    <div class="text-center">
                        <a class="text-decoration-underline" href="../auth/register">Creat new account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
