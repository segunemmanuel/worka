
  @include('backend.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('backend.body.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
@yield('dashboard')



		<!-- /.content -->
	  </div>
  </div>

  
  <!-- /.content-wrapper -->
  @include('backend.body.footer')
