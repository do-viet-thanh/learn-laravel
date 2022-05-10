<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="{{route('backend.users.index')}}">
                <b class="logo-icon ps-2">
                    <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" width="25"/>
                </b>
                <span class="logo-text ms-2">
                <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="light-logo"/>
              </span>
            </a>
            <a
                class="nav-toggler waves-effect waves-light d-block d-md-none"
                href="javascript:void(0)"
            ><i class="ti-menu ti-close"></i
                ></a>
        </div>
        <div class="navbar-collapse collapse justify-content-end" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                            src="{{asset('assets/images/users/1.jpg')}}"
                            alt="user"
                            class="rounded-circle"
                            width="31"
                        />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end user-dd animated"
                        aria-labelledby="navbarDropdown"
                    >
                        <a class="dropdown-item" href="{{route('backend.dashboard')}}"
                        ><i class="mdi mdi-view-dashboard"></i>
                            Trang chủ</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('backend.users.index')}}"
                        ><i class="me-2 mdi mdi-account-box"></i>
                            Người dùng</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('backend.login.get')}}"
                        ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                        >
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
