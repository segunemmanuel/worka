<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Sunny Admin - Dashboard</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('main/css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{asset('main/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

	<link rel="stylesheet" href="{{asset('main/css/skin_color.css')}}">

  </head>

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
