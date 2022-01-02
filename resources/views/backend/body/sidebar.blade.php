<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li>
          <a href="{{url('/dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>

        		<li>
          <a href="{{route('view.profile')}}">
            <i data-feather="pie-chart"></i>
			<span>Profile</span>
          </a>
        </li>



        <li class="treeview">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Users management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.category.view')}}"><i class="ti-more"></i>User categories</a></li>
            <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Users</a></li>
            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>
            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>

            <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>
          </ul>
        </li>



        <li class="treeview">
            <a href="#">
              <i data-feather="message-circle"></i>
              <span>Companies management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('companies.view')}}"><i class="ti-anchor"></i>All companies</a></li>
              <li><a href="{{route('company.add')}}"><i class="ti-more"></i>Create</a></li>
            </ul>
          </li>



          <li class="treeview">
            <a href="#">
              <i data-feather="message-circle"></i>
              <span>Jobs management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('jobs.view')}}"><i class="ti-anchor"></i>All  Jobs</a></li>
              <li><a href="{{route('jobs.add')}}"><i class="ti-more"></i>Create</a></li>
            </ul>
          </li>



          <li class="treeview">
            <a href="#">
              <i data-feather="message-circle"></i>
              <span>Jobs attributes</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('career.level.view')}}"><i class="ti-anchor"></i>All  career levels</a></li>
              <li><a href="{{route('jobs.add')}}"><i class="ti-more"></i>Create</a></li>
            </ul>
          </li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
