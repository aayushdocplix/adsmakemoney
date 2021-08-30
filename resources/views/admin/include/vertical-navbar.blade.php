<!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div data-active-color="white" data-background-color="man-of-steel" data-image="{{asset('public/app-assets-v/img/sidebar-bg/01.jpg')}}" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="{{asset('public/app-assets-v/img/logo.png')}}"/></div><span class="text align-middle">APEX</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
              <li class="nav-item">
                <a href="{{url('/dashboard')}}"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
              </li>
              <li class="nav-item">
                <a href="{{url('/youtube/channels')}}"><i class="fa fa-youtube"></i><span data-i18n="" class="menu-title">Subscribe Channels</span></a>
              </li>
              <li class=" nav-item">
                <a href="{{url('/genealogy')}}"><i class="fa fa-users"></i><span data-i18n="" class="menu-title">Genealogy</span></a>
              </li>
              @if(Auth::user()->role==1)
              <li class="nav-item">
                <a href="{{url('/generate-pins/list')}}"><i class="fa fa-list"></i><span data-i18n="" class="menu-title">Generate Pins</span></a>
              </li>
              <li class="nav-item">
                <a href="{{url('/youtube-videos')}}"><i class="fa fa-youtube"></i><span data-i18n="" class="menu-title">Youtube Videos</span></a>
              </li>
            
              <li class=" nav-item">
                <a href="{{url('/packages')}}"><i class="ft-file-plus"></i><span data-i18n="" class="menu-title">Create Package</span></a>
              </li>
              
              <li class=" nav-item">
                <a href="{{url('/banks')}}"><i class="fa fa-university"></i><span data-i18n="" class="menu-title">Add Bank</span></a>
              </li>

              <li class=" nav-item">
                <a href="{{url('/custom-ads')}}"><i class="ft-file-plus"></i><span data-i18n="" class="menu-title">Custom Ads</span></a>
              </li>
              <li class=" nav-item">
                <a href="{{url('/users')}}"><i class="ft-file-plus"></i><span data-i18n="" class="menu-title">Users</span></a>
              </li>
              @endif
              @if(Auth::user()->role!=1)
              <li class=" nav-item">
                <a href="{{url('/users')}}/{{ Auth::user()->id }}"><i class="ft-file-plus"></i><span data-i18n="" class="menu-title">Childs</span></a>
              </li>
              <li class=" nav-item">
                <a href="#"><i class="ft-file-plus"></i><span data-i18n="" class="menu-title">Total Earning</span></a>
              </li>
              @endif
              <li class="has-sub nav-item"><a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Pins</span></a>
                <ul class="menu-content">
                  <li><a href="{{url('/pin-request')}}" class="menu-item">Pin Request</a>
                  </li>
                  <li><a href="extended-table.html" class="menu-item">View Pins</a>
                  </li>
                  <li><a href="extended-table.html" class="menu-item">Top Up</a>
                  </li>
                </ul>
              </li> 

              
            </ul>
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->