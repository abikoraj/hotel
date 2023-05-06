<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                {{-- <img src="" alt=" Logo " height="22"> --}}
                Logo
            </span>
            <span class="logo-lg">
                <strong>Logo</strong>
            </span>

        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('roomCategory.index') }}">
                        <i class="bx bxs-dashboard icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Room Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('amenities.index') }}">
                        <i class="bx bxs-dashboard icon nav-icon"></i>
                        <span class="menu-item" data-key="t-todo">Amenities</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('room.create') }}">
                        <i class="bx bxs-dashboard nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Create Room</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('room.list') }}">
                        <i class="bx bxs-dashboard icon nav-icon"></i>
                        <span class="menu-item" data-key="t-chat">List Rooms</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="bx bx-power-off icon nav-icon"></i>
                        <span class="menu-item" data-key="t-chat">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
