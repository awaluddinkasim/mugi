<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('gejala.index') }}">
                        <i data-feather="grid"></i>
                        <span data-key="t-gejala">Data Gejala</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('penyakit.index') }}">
                        <i data-feather="file-text"></i>
                        <span data-key="t-penyakit">Data Penyakit</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('relasi.index') }}">
                        <i data-feather="clipboard"></i>
                        <span data-key="t-relasi">Relasi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('result.index') }}">
                        <i data-feather="clipboard"></i>
                        <span data-key="t-relasi">Hasil Diagnosa</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.index') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-users">Daftar Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}">
                        <i data-feather="info"></i>
                        <span data-key="t-about">Tentang</span>
                    </a>
                </li>

                {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="users"></i>
                                <span data-key="t-authentication">Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a>
                                </li>
                                <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                <li><a href="auth-logout.html" data-key="t-logout">Log Out</a></li>
                                <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                <li><a href="auth-email-verification.html" data-key="t-email-verification">Email
                                        Verification</a></li>
                                <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two
                                        Step Verification</a></li>
                            </ul>
                        </li> --}}

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
