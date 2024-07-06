<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                @foreach (config('menu') as $menu)
                    <li>
                        <a href="{{ route($menu['routeName']) }}">
                            <i data-feather="{{ $menu['icon'] }}"></i>
                            <span data-key="t-{{ uniqid() }}">{{ $menu['title'] }}</span>
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
