<div class="navbar-default sidebar ">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
            <!-- /input-group -->
            </li>
            <li>
                <a class="active" href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="{{ URL::to('users') }}"><i class="fa fa-user "></i> Users</a>
            </li>
            <li>
                <a href="{{ URL::to('posts') }}"><i class="fa fa-file "></i> Posts</a>
            </li>
            <li>
                <a href="{{ URL::to('post_type') }}"><i class="fa fa-file-o"></i> Post Type</a>
            </li>
            <li>
                <a href="{{ URL::to('navigation') }}"><i class="fa fa-navicon "></i> Navigation</a>
            </li>
            <li>
                <a href="{{ URL::to('student_message') }}"><i class="fa fa-envelope"></i> Student Message</a>
            </li>
            <li>
                <a href="{{ URL::to('news') }}"><i class="fa fa-newspaper-o "></i> News and Events</a>
            </li>
            <li>
                <a href="{{ URL::to('photos') }}"><i class="fa fa-photo "></i> Photos</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="#">Buttons</a>
                    </li>
                    <li>
                        <a href="#">Notifications</a>
                    </li>
                    <li>
                        <a href="#">Typography</a>
                    </li>
                    <li>
                        <a href="#">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Blank Page</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('auth/login') }}">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->