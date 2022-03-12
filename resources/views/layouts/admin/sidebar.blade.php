<Linkside className="main-sidebar">
    <section className="sidebar">

        <div className="user-panel">
            <Link to="{{url('')}}" target="_blank">
                <div className="image" style="width: 60px; height: 60px; background: #0073B1; border: 10px solid #0073B1; box-sizing: content-box; overflow: hidden;">
                    <img src="{{ asset('/img/app/icons/logo.png') }}" className="img-circle dp-contain" alt="Posla" style="margin-top: -15px;">
                </div>
            </Link>
            <div className="info" style="padding-left: 10px; padding-right: 10px;">
                <p>Fname Lname</p>
                <p className="font-weight-normal" style="color: #aaa;">
                    Admin
                </p>
            </div>
        </div>


        <ul className="sidebar-menu" data-widget="tree">
            <li className="header">Welcome</li>
            <li className="@if(request()->segment(2) == 'dashboard') active @endif">
                <Link to="/admin/dashboard">
                    <i className="fa fa-tachometer-alt"></i> <span>Dashboard</span>
                </Link>
            </li>

            <li className="header">Samples</li>

            <li className="treeview @if(request()->segment(2) == 'sample') active @endif">
                <Link to="#">
                    <i className="fa fa-list"></i>
                    <span>Pages</span>
                    <span className="pull-right-container">
                        <i className="fa fa-angle-left pull-right"></i>
                    </span>
                </Link>
                <ul className="treeview-menu">
                    <li className="@if(request()->segment(2) == 'sample' && request()->segment(3) == 'list') active @endif">
                        <Link to="/admin/sample/list">
                            <i className="fa fa-list"></i>
                            List Page
                        </Link>
                    </li>
                    <li className="@if(request()->segment(2) == 'sample' && request()->segment(3) == 'form') active @endif">
                        <Link to="/admin/sample/form">
                            <i className="fa fa-list"></i>
                            Form Page
                        </Link>
                    </li>
                    <li className="@if(request()->segment(2) == 'sample' && request()->segment(3) == 'details') active @endif">
                        <Link to="/admin/sample/details">
                            <i className="fa fa-list"></i>
                            Details Page
                        </Link>
                    </li>
                </ul>
            </li>

            <li className="treeview @if(request()->segment(2) == 'categories') active @endif">
                <Link to="#">
                    <i className="fa fa-list"></i>
                    <span>Category</span>
                    <span className="pull-right-container">
                        <i className="fa fa-angle-left pull-right"></i>
                    </span>
                </Link>
                <ul className="treeview-menu">
                    <li className="@if(request()->segment(2) == 'categories' && request()->segment(3) == '') active @endif">
                        <Link to="{{route('admin.categories.index')}}">
                            <i className="fa fa-list"></i>
                            List Category
                        </Link>
                    </li>
                    <li className="@if(request()->segment(2) == 'categories' && request()->segment(3) == 'create') active @endif">
                        <Link to="{{route('admin.categories.create')}}">
                            <i className="fa fa-list"></i>
                            Create Category
                        </Link>
                    </li>
                </ul>
            </li>

            <li className="header">Others</li>
            <li>
                <Link to="{{url('')}}" target="_blank">
                    <i className="fa fa-desktop"></i> <span>Goto homepage</span>
                </Link>
            </li>
            <li>
                <Link to="">
                    <i className="fa fa-user"></i> <span>Logout</span>
                </Link>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>