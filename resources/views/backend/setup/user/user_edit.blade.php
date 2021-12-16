@extends('backend.admin_master')
@section('dashboard')
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
<h4 class="box-title">Edit users details</h4>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="row">
<div class="col">
<form method="POST" action="{{route('user.update',$editData->id)}}">
    @csrf
<input type="hidden" name="name">
<div class="row">
<div class="col-12">	
<div class="form-group">
<h5>User name <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="name" value="{{$editData->name}}" class="form-control"> 
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
<div class="text-xs-right">
<input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">
</div>
</div>
<!-- /.col -->
</div>
</form>
<!-- /.row -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

</div>
</div>
</section>
@endsection