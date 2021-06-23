


    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>



      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" >
              <!--<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <span class="hidden-xs">{{ strtoupper( Auth::user()->name) }}</span>
            </a>

          </li>


        </ul>
      </div>
    </nav>
