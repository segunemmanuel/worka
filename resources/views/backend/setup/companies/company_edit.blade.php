@extends('backend.admin_master')
@section('dashboard')
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
<h4 class="box-title">Add new companies </h4>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="row">
<div class="col">
<form method="POST" action="{{route('company.store')}}" enctype="multipart/form-data">
    @csrf
<input type="hidden" name="name">
{{--  --}}

<div class="row">
<div class="col-md-6">
<div class="form-group">
<h5>Name<span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="name" value={{$company->name}} class="form-control">
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>

</div>


<div class="col-md-6">
    <div class="form-group">
    <h5>Logo<span class="text-danger">*</span></h5>
    <div class="controls">
    <input type="file" name="logo" value={{$company->logo}} class="form-control">
        </div>
    </div>

    </div>


<!-- /.col -->
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <h5>Email<span class="text-danger">*</span></h5>
    <div class="controls">
    <input type="email" name="email" value={{$company->email}} class="form-control">
    @error('email')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
    </div>

    </div>


    <div class="col-md-6">
        <div class="form-group">
        <h5>Industry<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="industry" value={{$company->industry}} class="form-control">
        @error('industry')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        </div>

        </div>


    <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <h5>Location<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="location" value={{$company->location}} class="form-control">
        @error('location')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        </div>

        </div>


        <div class="col-md-6">
            <div class="form-group">
            <h5>Year<span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="date" name="year" value={{$company->date_established}} class="form-control">
            @error('year')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            </div>
            </div>
        <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <h5>Website URL<span class="text-danger">*</span></h5>
            <div class="controls">
            <input type="text" name="url" value={{$company->url}} class="form-control">
            @error('url')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            </div>
            </div>
            <!-- /.col -->
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <h5>Description<span class="text-danger">*</span></h5>
                    <div class="controls">
                                        <textarea id="editor1" value={{$company->description}} name="description" id="" cols="50" rows="10"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    </div>

                    </div>
            </div>

<!-- /.row -->
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
