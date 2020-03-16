@section('aside')
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-10">
                <!-- Logo -->
                <a class="link-fx font-w600 font-size-lg text-white" href="{{url('')}}" target="_blank">
                            <span class="smini-visible">
                                <span class="text-white-75">I</span><span class="text-white">FW</span>
                            </span>
                    <span class="smini-hidden">
                                <span class="text-white">Idea</span><span class="text-white-75"> For World</span>
                            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </a>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{url('')}}" target="_blank">
                        <i class="nav-main-link-icon fa fa-globe"></i>
                        <span class="nav-main-link-name">Visit Website </span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{url('admin')}}">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                {{--<li class="nav-main-item  @if(request()->segment('2')=='users') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon si si-user"></i>--}}
                        {{--<span class="nav-main-link-name">User Accounts</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link active" href="{{url('admin/users')}}">--}}
                                {{--<span class="nav-main-link-name">Users</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class="nav-main-item">
                    <a class="nav-main-link @if(request()->segment('2')=='profile') active @endif"  href="{{url('admin/profile')}}">
                        <i class="nav-main-link-icon fa fa-info-circle"></i>
                        <span class="nav-main-link-name">Profile Update</span>
                    </a>
                </li>
                {{--<li class="nav-main-item">--}}
                    {{--<a class="nav-main-link @if(request()->segment('2')=='room-booking') active @endif"  href="{{url('admin/room-booking')}}">--}}
                        {{--<i class="nav-main-link-icon fa fa-bed"></i>--}}
                        {{--<span class="nav-main-link-name">Room Booking</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item">--}}
                    {{--<a class="nav-main-link @if(request()->segment('2')=='file-manager') active @endif"  href="{{url('admin/file-manager')}}">--}}
                        {{--<i class="nav-main-link-icon fa fa-file-alt"></i>--}}
                        {{--<span class="nav-main-link-name">File Manager</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item @if(request()->segment('2')=='rooms') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-bed"></i>--}}
                        {{--<span class="nav-main-link-name">Room Management</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item @if(request()->segment('3')=='list-room' || request()->segment('3')=='add-room' || request()->segment('3')=='book-room') open @endif">--}}
                            {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                                {{--<span class="nav-main-link-name">Rooms</span>--}}
                            {{--</a>--}}
                            {{--<ul class="nav-main-submenu">--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='list-room') active @endif" href="{{url('admin/rooms/list-room')}}">--}}
                                        {{--<span class="nav-main-link-name">Room List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='add-room') active @endif" href="{{url('admin/rooms/add-room')}}">--}}
                                        {{--<span class="nav-main-link-name">Add Room</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item">--}}
                            {{--<a class="nav-main-link @if(request()->segment('3')=='accommodation' || request()->segment('3')=='add-accommodation') active @endif" href="{{url('admin/rooms/accommodation')}}">--}}
                                {{--<span class="nav-main-link-name">Accommodation</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li class="nav-main-item @if(request()->segment('3')=='others') open @endif">--}}
                            {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                                {{--<span class="nav-main-link-name">Features</span>--}}
                            {{--</a>--}}
                            {{--<ul class="nav-main-submenu">--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('4')=='room-types') active @endif" href="{{url('admin/rooms/others/room-types')}}">--}}
                                        {{--<span class="nav-main-link-name">Room Type List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('4')=='room-floors') active @endif" href="{{url('admin/rooms/others/room-floors')}}">--}}
                                        {{--<span class="nav-main-link-name">Room Floor List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('4')=='room-benefits') active @endif" href="{{url('admin/rooms/others/room-benefits')}}">--}}
                                        {{--<span class="nav-main-link-name">Room Features</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-main-item">--}}
                                {{--<a class="nav-main-link @if(request()->segment('3')=='category-front') active @endif" href="{{url('superadmin/article/category-front')}}">--}}
                                {{--<span class="nav-main-link-name">Category Front Page</span>--}}
                                {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item  @if(request()->segment('2')=='event') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-evernote"></i>--}}
                        {{--<span class="nav-main-link-name">Event Page</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link  @if(request()->segment('3')=='update') active @endif" href="{{url('admin/event/update')}}">--}}
                                {{--<span class="nav-main-link-name">Update Event Page</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link  @if(request()->segment('3')=='content') active @endif" href="{{url('admin/event/content')}}">--}}
                                {{--<span class="nav-main-link-name">Event Page Content</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item  @if(request()->segment('2')=='dining') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-restroom"></i>--}}
                        {{--<span class="nav-main-link-name">Dining Page</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link  @if(request()->segment('3')=='update') active @endif" href="{{url('admin/dining/update')}}">--}}
                                {{--<span class="nav-main-link-name">Update Dining</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link  @if(request()->segment('3')=='content') active @endif" href="{{url('admin/dining/content')}}">--}}
                                {{--<span class="nav-main-link-name">Dining Page Content</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item  @if(request()->segment('2')=='relax') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-pager"></i>--}}
                        {{--<span class="nav-main-link-name">Relax Page</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link  @if(request()->segment('3')=='update') active @endif" href="{{url('admin/relax/update')}}">--}}
                                {{--<span class="nav-main-link-name">Update Relax</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item open">--}}
                            {{--<a class="nav-main-link  @if(request()->segment('3')=='content') active @endif" href="{{url('admin/relax/content')}}">--}}
                                {{--<span class="nav-main-link-name">Relax Page Content</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="nav-main-item @if(request()->segment('2')=='article') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-book-reader"></i>--}}
                        {{--<span class="nav-main-link-name">Article Management</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item @if(request()->segment('3')=='list-article' || request()->segment('3')=='add-article') open @endif">--}}
                            {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                                {{--<span class="nav-main-link-name">Articles</span>--}}
                            {{--</a>--}}
                            {{--<ul class="nav-main-submenu">--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='list-article') active @endif" href="{{url('admin/article/list-article')}}">--}}
                                        {{--<span class="nav-main-link-name">Article List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='add-article') active @endif" href="{{url('admin/article/add-article')}}">--}}
                                        {{--<span class="nav-main-link-name">Add Article</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item @if(request()->segment('3')=='category') open @endif">--}}
                            {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                                {{--<span class="nav-main-link-name">Category</span>--}}
                            {{--</a>--}}
                            {{--<ul class="nav-main-submenu">--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='category') active @endif" href="{{url('admin/article/category')}}">--}}
                                        {{--<span class="nav-main-link-name">Category List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="nav-main-item">--}}
                                {{--<a class="nav-main-link @if(request()->segment('3')=='category-front') active @endif" href="{{url('superadmin/article/category-front')}}">--}}
                                {{--<span class="nav-main-link-name">Category Front Page</span>--}}
                                {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li class="nav-main-item @if(request()->segment('2')=='slider') open @endif">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-images"></i>
                        <span class="nav-main-link-name">Slider</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(request()->segment('3')=='slider-list') active @endif" href="{{url('admin/slider/slider-list')}}">
                                <span class="nav-main-link-name">Slider List</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(request()->segment('3')=='add-slider') active @endif" href="{{url('admin/slider/add-slider')}}">
                                <span class="nav-main-link-name">Add Slider</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link @if(request()->segment('2')=='contact') active @endif"  href="{{url('admin/contact')}}">
                        <i class="nav-main-link-icon fa fa-envelope"></i>
                        <span class="nav-main-link-name">Contact List</span>
                    </a>
                </li>

                {{--<li class="nav-main-item @if(request()->segment('2')=='gallery') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-images"></i>--}}
                        {{--<span class="nav-main-link-name">Gallery Management</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item">--}}
                            {{--<a class="nav-main-link @if(request()->segment('3')=='gallery-list') active @endif" href="{{url('admin/gallery/list-gallery')}}">--}}
                                {{--<span class="nav-main-link-name">Gallery List</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item">--}}
                            {{--<a class="nav-main-link @if(request()->segment('3')=='gallery-category') active @endif" href="{{url('admin/gallery/gallery-category')}}">--}}
                                {{--<span class="nav-main-link-name">Gallery Category</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item @if(request()->segment('2')=='testimonial') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-images"></i>--}}
                        {{--<span class="nav-main-link-name">Testimonial</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item">--}}
                            {{--<a class="nav-main-link @if(request()->segment('3')=='list-testimonial') active @endif" href="{{url('admin/testimonial/list-testimonial')}}">--}}
                                {{--<span class="nav-main-link-name">Testimonial List</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item">--}}
                            {{--<a class="nav-main-link @if(request()->segment('3')=='add-testimonial') active @endif" href="{{url('admin/testimonial/add-testimonial')}}">--}}
                                {{--<span class="nav-main-link-name">Add Testimonial</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-main-item">--}}
                    {{--<a class="nav-main-link @if(request()->segment('2')=='counter') active @endif"  href="{{url('admin/counter')}}">--}}
                        {{--<i class="nav-main-link-icon fa fa-nutritionix"></i>--}}
                        {{--<span class="nav-main-link-name">Counter Update</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="nav-main-item @if(request()->segment('2')=='faculty-course') open @endif">--}}
                    {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                        {{--<i class="nav-main-link-icon fa fa-images"></i>--}}
                        {{--<span class="nav-main-link-name">Slider</span>--}}
                    {{--</a>--}}
                    {{--<ul class="nav-main-submenu">--}}
                        {{--<li class="nav-main-item @if(request()->segment('3')=='faculty') open @endif">--}}
                            {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                                {{--<span class="nav-main-link-name">Faculty</span>--}}
                            {{--</a>--}}
                            {{--<ul class="nav-main-submenu">--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='faculty') active @endif" href="{{url('superadmin/faculty-course/faculty')}}">--}}
                                        {{--<span class="nav-main-link-name">Faculty List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="nav-main-item @if(request()->segment('3')=='course') open @endif">--}}
                            {{--<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">--}}
                                {{--<span class="nav-main-link-name">Course</span>--}}
                            {{--</a>--}}
                            {{--<ul class="nav-main-submenu">--}}
                                {{--<li class="nav-main-item">--}}
                                    {{--<a class="nav-main-link @if(request()->segment('3')=='course') active @endif" href="{{url('superadmin/faculty-course/course')}}">--}}
                                        {{--<span class="nav-main-link-name">Course List</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>
        </div>
        <!-- END Side Navigation -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-dual mr-1" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
                </button>
                <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item" href="{{url('admin/profile')}}">
                                <i class="far fa-fw fa-user mr-1"></i> Profile
                            </a>
                            {{--<a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">--}}
                                {{--<span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>--}}
                                {{--<span class="badge badge-primary">3</span>--}}
                            {{--</a>--}}
                            {{--<a class="dropdown-item" href="be_pages_generic_invoice.html">--}}
                                {{--<i class="far fa-fw fa-file-alt mr-1"></i> Invoices--}}
                            {{--</a>--}}
                            {{--<div role="separator" class="dropdown-divider"></div>--}}

                            {{--<!-- Toggle Side Overlay -->--}}
                            {{--<!-- Layout API, functionality initialized in Template._uiApiLayout() -->--}}
                            {{--<a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">--}}
                                {{--<i class="far fa-fw fa-building mr-1"></i> Settings--}}
                            {{--</a>--}}
                            {{--<!-- END Side Overlay -->--}}

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url('logout')}}">
                                <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="badge badge-secondary badge-pill">0</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            {{--<li>--}}
                                {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
                                    {{--<div class="mx-3">--}}
                                        {{--<i class="fa fa-fw fa-check-circle text-success"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body font-size-sm pr-2">--}}
                                        {{--<div class="font-w600">App was updated to v5.6!</div>--}}
                                        {{--<div class="text-muted font-italic">3 min ago</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
                                    {{--<div class="mx-3">--}}
                                        {{--<i class="fa fa-fw fa-user-plus text-info"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body font-size-sm pr-2">--}}
                                        {{--<div class="font-w600">New Subscriber was added! You now have 2580!</div>--}}
                                        {{--<div class="text-muted font-italic">10 min ago</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
                                    {{--<div class="mx-3">--}}
                                        {{--<i class="fa fa-fw fa-times-circle text-danger"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body font-size-sm pr-2">--}}
                                        {{--<div class="font-w600">Server backup failed to complete!</div>--}}
                                        {{--<div class="text-muted font-italic">30 min ago</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="text-dark media py-2" href="javascript:void(0)">--}}
                                    {{--<div class="mx-3">--}}
                                        {{--<i class="fa fa-fw fa-exclamation-circle text-warning"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body font-size-sm pr-2">--}}
                                        {{--<div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>--}}
                                        {{--<div class="text-muted font-italic">1 hour ago</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--@foreach($room_books as $room_book)--}}
                            {{--<li>--}}
                                {{--<a class="text-dark media py-2" href="{{url('admin/room-booking')}}">--}}
                                    {{--<div class="mx-3">--}}
                                        {{--<i class="fa fa-fw fa-plus-circle text-primary"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="media-body font-size-sm pr-2">--}}
                                        {{--<div class="font-w600">{{$room_book->full_name}} Booked {{$room_book->room->name}} Room</div>--}}
                                        {{--<div class="text-muted font-italic">{{ $room_book->created_at->diffForHumans() }}</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--@endforeach--}}
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-primary">
            <div class="content-header">
                <form class="w-100" action="#" method="POST">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

@endsection