<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="">
                <img src="{{ asset('assets/images/loader.jpg') }}" width="50px">
                <span class="brand-name" style="font-size: 17px">Ramtha Municipality</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="{{ set_active(['dashboard']) }}">
                    <a class="sidenav-item-link" href="{{ url('admin/dashboard') }}">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="{{ set_active(['admin-users.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('admin-users.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Admins</span>
                    </a>
                </li>
                <li class="{{ set_active(['projects-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('projects-admin.index') }}">
                        <i class="mdi mdi-chart-histogram"></i>
                        <span class="nav-text">Projects</span>
                    </a>
                </li>
                <li class="{{ set_active(['news-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('news-admin.index') }}">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="nav-text">News</span>
                    </a>
                </li>
                <li class="{{ set_active(['partners-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('partners-admin.index') }}">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="nav-text">Partners</span>
                    </a>
                </li>
                <li class="{{ set_active(['investments-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('investments-admin.index') }}">
                        <i class="mdi mdi-chart-line"></i>
                        <span class="nav-text">Investment opportunities</span>
                    </a>
                </li>
                <li class="{{ set_active(['Events-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('Events-admin.index') }}">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span class="nav-text">Events</span>
                    </a>
                </li>
                <li class="{{ set_active(['EventParticipant-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('EventParticipant-admin.index') }}">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span class="nav-text">Event Participants</span>
                    </a>
                </li>

                <li class="{{ set_active(['jobs-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('jobs-admin.index') }}">
                        <i class="fa-solid fa-briefcase"></i>
                        <span class="nav-text">Jobs</span>
                    </a>
                </li>

                <li class="{{ set_active(['complain-admin.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('complain-admin.index') }}">
                        <i class="mdi mdi-alert-octagon"></i>
                        <span class="nav-text">Complain</span>
                    </a>
                </li>
                {{-- <li class="{{ set_active(['teams.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('teams.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Teams</span>
                <li class="{{ set_active(['features.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('features.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Features</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ set_active(['roadmap.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('roadmap.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Road Map</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ set_active(['admin.categories.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('admin.categories.index') }}">
                        <i class="mdi mdi-certificate"></i>
                        <span class="nav-text">Categories</span>

                <li class="{{ set_active(['components.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('components.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Components</span>
                    </a>
                </li>
                <li class="{{ set_active(['home-page.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('home-page.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Home Page</span>
                    </a>
                </li>
                <li class="{{ set_active(['admin-users.*']) }}">
                    <a class="sidenav-item-link" href="{{ route('admin-users.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Admins</span>
                    </a>
                </li>
                <li class="section-title">
                    Apps
                </li>
                <li>
                    <a class="sidenav-item-link" href="chat.html">
                        <i class="mdi mdi-wechat"></i>
                        <span class="nav-text">Chat</span>
                    </a>
                </li>
                <li>
                    <a class="sidenav-item-link" href="contacts.html">
                        <i class="mdi mdi-phone"></i>
                        <span class="nav-text">Contacts</span>
                    </a>
                </li>
                <li>
                    <a class="sidenav-item-link" href="team.html">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Team</span>
                    </a>
                </li>
                <li>
                    <a class="sidenav-item-link" href="calendar.html">
                        <i class="mdi mdi-calendar-check"></i>
                        <span class="nav-text">Calendar</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</aside>
