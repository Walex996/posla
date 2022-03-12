<header className="main-header">
    <Link to="" className="logo">
      <span className="logo-mini"><b>Posla</b></span>
      <span className="logo-lg"><b>Posla</b></span>
    </Link>
    <nav className="navbar navbar-static-top">
      <Link to="#" className="sidebar-toggle" data-toggle="push-menu" role="button">
        <span className="sr-only">Toggle navigation</span>
        <span className="fa fa-bars"></span>
        {/*<span className="icon-bar"></span> */}
        {/*<span className="icon-bar"></span> */}
        {/*<span className="icon-bar"></span> */}
      </Link>

      <div className="layout-mobile-title d-block d-md-none">
        Admin Panel
      </div>
      
      <div className="navbar-custom-menu">
        <ul className="nav navbar-nav">

          <!--
          <li className="dropdown messages-menu">
            <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
              <i className="far fa-envelope"></i>
              <span className="label label-success">4</span>
            </Link>
            <ul className="dropdown-menu">
              <li className="header">You have 4 messages</li>
              <li>
                <ul className="menu">
                  <li>
                    <Link to="#">
                      <div className="pull-left">
                        <img src="{{ asset('back/img/users/user.jpg') }}" className="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i className="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <div className="pull-left">
                        <img src="{{ asset('back/img/users/user.jpg') }}" className="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i className="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <div className="pull-left">
                        <img src="{{ asset('back/img/users/user.jpg') }}" className="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i className="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <div className="pull-left">
                        <img src="{{ asset('back/img/users/user.jpg') }}" className="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i className="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <div className="pull-left">
                        <img src="{{ asset('back/img/users/user.jpg') }}" className="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i className="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </Link>
                  </li>
                </ul>
              </li>
              <li className="footer"><Link to="#">See All Messages</Link></li>
            </ul>
          </li>
          
          <li className="dropdown notifications-menu">
            <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
              <i className="far fa-bell"></i>
              <span className="label label-warning">10</span>
            </Link>
            <ul className="dropdown-menu">
              <li className="header">You have 10 notifications</li>
              <li>
                <ul className="menu">
                  <li>
                    <Link to="#">
                      <i className="fa fa-users text-aqua"></i> 5 new members joined today
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <i className="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <i className="fa fa-users text-red"></i> 5 new members joined
                    </Link>
                  </li>

                  <li>
                    <Link to="#">
                      <i className="fa fa-shopping-cart text-green"></i> 25 sales made
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <i className="fa fa-user text-red"></i> You changed your username
                    </Link>
                  </li>
                </ul>
              </li>
              <li className="footer"><Link to="#">View all</Link></li>
            </ul>
          </li>
          
          <li className="dropdown tasks-menu">
            <Link to="#" className="dropdown-toggle" data-toggle="dropdown">
              <i className="far fa-flag"></i>
              <span className="label label-danger">9</span>
            </Link>
            <ul className="dropdown-menu">
              <li className="header">You have 9 tasks</li>
              <li>
                <ul className="menu">
                  <li>
                    <Link to="#">
                      <h3>
                        Design some buttons
                        <small className="pull-right">20%</small>
                      </h3>
                      <div className="progress xs">
                        <div className="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span className="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <h3>
                        Create a nice theme
                        <small className="pull-right">40%</small>
                      </h3>
                      <div className="progress xs">
                        <div className="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span className="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <h3>
                        Some task I need to do
                        <small className="pull-right">60%</small>
                      </h3>
                      <div className="progress xs">
                        <div className="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span className="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </Link>
                  </li>
                  <li>
                    <Link to="#">
                      <h3>
                        Make beautiful transitions
                        <small className="pull-right">80%</small>
                      </h3>
                      <div className="progress xs">
                        <div className="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span className="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </Link>
                  </li>
                </ul>
              </li>
              <li className="footer">
                <Link to="#">View all tasks</Link>
              </li>
            </ul>
          </li>
          -->

          
          <li className="dropdown user user-menu" style="min-height: 50px;">
            <Link to="#" className="dropdown-toggle" data-toggle="dropdown" style="height: 50px;">
              <img src="{{ asset('/img/app/samples/user.png') }}" className="user-image" alt="User Image">
              {/*<span className="fa fa-user"></span> */}
              <span className="hidden-xs" style="position: relative; top: 2px;">Fname Lname</span>
              <span className="fa fa-angle-down" style="position: relative; top: 3px; margin-left: 5px;"></span>
            </Link>
            <ul className="dropdown-menu">
              
              <li className="user-header" style="text-align: center !important; padding-top: 15px !important;">
                
                <img src="{{ asset('back/img/users/user.jpg') }}" className="img-circle" alt="fname">

                <p style="text-align: center !important;">
                  Fname Lname
                  <small style="text-align: center !important;">Account created on: Jan X, 20XX</small>
                </p>
              </li>
              
              <li className="user-footer">
                <div className="pull-left">
                  <Link to="" className="btn btn-blue">Profile</Link>
                </div>
                <div className="pull-right">
                  <Link to="" className="btn btn-danger">Logout</Link>
                </div>
              </li>
              
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>