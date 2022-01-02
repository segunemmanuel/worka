@extends('backend.admin_master')

@section('dashboard')
<section class="content">
    <!-- Basic Forms -->
    <div class="box">
    <div class="box-header with-border">
    <h4 class="box-title">Add new career</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <div class="row">
    <div class="col">
    <form method="POST" action="{{route('career.level.update',$careers->id)}}" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="name">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <h5>Name<span class="text-danger">*</span></h5>
    <div class="controls">
    <input type="text" value={{$careers->name}} name="name" class="form-control">
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Status</label>
            <div class="c-inputs-stacked">

                <input name="status"  {{ $careers->status == '1'  ? 'checked' : ''}}   value="1" type="radio" id="radio_123">
                <label for="radio_123" class="mr-30">Active</label>

                <input name="status"   {{$careers->status== '0'  ? 'checked' : ''}} value="0" type="radio" id="radio_456">
                <label for="radio_456"  class="mr-30">Inactive</label>
             </div>
        </div>

        </div>
    <!-- /.col -->
    </div>
</div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <div class="text-xs-right">
        <input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">
        </div>
    </form>
    </div>
    </div>
    </section>
@endsection
