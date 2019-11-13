<header class="main-header" style="font-weight: bold">
    <!-- Logo -->
<!--    <a href="javascript::void(0);" class="logo">
       mini logo for sidebar mini 50x50 pixels 
      <span class="logo-mini"><b>B</b>App</span>
       logo for regular state and mobile devices 
      <span class="logo-lg"><b>Enquiry </b>App</span>
    </a>-->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <a href="#" style="float: left; background-color: transparent; background-image: none;padding: 15px 15px;font-family: fontAwesome;" >
          <span style="color: #FFFFFF;font-weight: bold;">@yield('title')</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!--<li class="logo-lg"><b>Enquiry </b>App</li>-->
          <!-- Messages: style  can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          
          <?php if (Auth::guard('admin')->check()) {     ?>
          <li class="dropdown user user-menu">
            <a class="dropdown-item" href="{{ url('admin-logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ url('admin-logout') }}" method="POST" style="display: none;">
                @csrf
            </form>  
          </li>    
          <?php } else if(Auth::guard('web')->check()){ ?>
          <li class="dropdown user user-menu">
            <a class="dropdown-item" href="{{ url('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>  
          </li>
          <?php } 
          else if(Auth::guard('employee')->check()){ ?>
          <li class="dropdown user user-menu">
            <a class="dropdown-item" href="{{ url('employee-logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ url('employee-logout') }}" method="POST" style="display: none;">
                @csrf
            </form>  
          </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>