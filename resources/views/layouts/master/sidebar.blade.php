<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::route()->getName() == 'home' ? 'active':'' }}"
                        href="{{ route('home') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::route()->getName() == 'doc.index' ? 'active':'' }}"
                        href="{{ route('doc.index') }}" aria-expanded="false">
                        <i class="mdi mdi-telegram"></i>
                        <span class="hide-menu">Archives</span>
                    </a>
                </li>
                @if (Auth::User()->id_rule == 1)
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::route()->getName() == 'user.index' ? 'active':'' }}"
                        href="{{ route('user.index') }}" aria-expanded="false">
                        <i class="mdi mdi-account-multiple-plus"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>