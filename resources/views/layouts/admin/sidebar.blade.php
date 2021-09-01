<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <a href="{{url('')}}" target="_blank">
                <div class="image" style="width: 60px; height: 60px; background: #0073B1; border: 10px solid #0073B1; box-sizing: content-box; overflow: hidden;">
                    <img src="{{ asset('/img/app/icons/logo.png') }}" class="img-circle dp-contain" alt="Posla" style="margin-top: -15px;">
                </div>
            </a>
            <div class="info" style="padding-left: 10px; padding-right: 10px;">
                <p>Fname Lname</p>
                <p class="font-weight-normal" style="color: #aaa;">
                    Admin
                </p>
            </div>
        </div>


        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Welcome</li>
            <li class="@if(request()->segment(2) == 'dashboard') active @endif">
                <a href="/admin/dashboard">
                    <i class="fa fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="header">Samples</li>

            <li class="treeview @if(request()->segment(2) == 'sample') active @endif">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Pages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if(request()->segment(2) == 'sample' && request()->segment(3) == 'list') active @endif">
                        <a href="/admin/sample/list">
                            <i class="fa fa-list"></i>
                            List Page
                        </a>
                    </li>
                    <li class="@if(request()->segment(2) == 'sample' && request()->segment(3) == 'form') active @endif">
                        <a href="/admin/sample/form">
                            <i class="fa fa-list"></i>
                            Form Page
                        </a>
                    </li>
                    <li class="@if(request()->segment(2) == 'sample' && request()->segment(3) == 'details') active @endif">
                        <a href="/admin/sample/details">
                            <i class="fa fa-list"></i>
                            Details Page
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview @if(request()->segment(2) == 'categories') active @endif">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if(request()->segment(2) == 'categories' && request()->segment(3) == '') active @endif">
                        <a href="{{route('admin.categories.index')}}">
                            <i class="fa fa-list"></i>
                            List Category
                        </a>
                    </li>
                    <li class="@if(request()->segment(2) == 'categories' && request()->segment(3) == 'create') active @endif">
                        <a href="{{route('admin.categories.create')}}">
                            <i class="fa fa-list"></i>
                            Create Category
                        </a>
                    </li>
                </ul>
            </li>

            <li class="header">Others</li>
            <li>
                <a href="{{url('')}}" target="_blank">
                    <i class="fa fa-desktop"></i> <span>Goto homepage</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-user"></i> <span>Logout</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>