<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="24"> <span
                            class="logo-txt">{{ config('app.name') }}</span>
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="24">
                        <span class="logo-txt">{{ config('app.name') }}</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-light-subtle border-start border-end"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/avatar.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ auth()->user()->nama }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile
                    </a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="dropdown-item">
                            <i class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
