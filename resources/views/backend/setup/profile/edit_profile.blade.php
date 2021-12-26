@extends('backend.admin_master')
@section('dashboard')
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
<h4 class="box-title">Edit your profile</h4>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="row">
<div class="col">
<form method="POST" action="{{route('profile.update', $editData->id)}}" enctype="multipart/form-data">
    @csrf
<input type="hidden" name="name">
<div class="row">
<div class="col-6">
<div class="form-group">
<h5>User name <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="name" value="{{$editData->name}}" class="form-control">
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>

</div>
<!-- /.col -->


<div class="col-6">
    <div class="form-group">
    <h5>User Category <span class="text-danger">*</span></h5>
    <div class="controls">
        <select name="user_category" id="user_category" required="" class="form-control">
			<option value="" selected="" disabled="">Select user categories</option>
            @foreach($categories as $category)
 <option selected="" value="{{$category->id}}">{{ $category->name}}</option>
 @endforeach

		</select>
	 </div>


    </div>
    </div>

    </div>



    <div class="row">
        <div class="col-6">
        <div class="form-group">
        <h5>User Address <span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="address" value="{{$editData->address}}" class="form-control">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        </div>

        </div>
        <!-- /.col -->


        <div class="col-6">
            <div class="form-group">
            <h5>User Religion <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="religion" value="{{$editData->religion}}" class="form-control">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>


            </div>
            </div>

            </div>



            <div class="row">
                <div class="col-6">
                <div class="form-group">
                <h5>User mobile <span class="text-danger">*</span></h5>
                <div class="controls">
                <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                </div>

                </div>
                <!-- /.col -->


                <div class="col-6">
                    <div class="form-group">
                    <h5>Date of Birth<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="date" name="dob" value="{{$editData->dob}}" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>


                    </div>
                    </div>

                    </div>


                    <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                        <h5>User CV <span class="text-danger">*</span></h5>
                        <div class="controls">
                        <input type="file" name="cv" value="{{$editData->cv}}" class="form-control">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        </div>

                        </div>
                        <!-- /.col -->


                        <div class="col-6">
                            <div class="form-group">
                            <h5>Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" value="{{$editData->image}}" class="form-control">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>


                            </div>
                            </div>

                            </div>

                            <div class="row">
                                <div class="col-6">
                                <div class="form-group">
                                <h5>User Email <span class="text-danger">*</span></h5>
                                <div class="controls">
                                <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                </div>

                                </div>
                                <!-- /.col -->

                                <div class="col-6">
                                    <div class="form-group">
                                    <h5>User Gender <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                    <input type="text" name="gender" value="{{$editData->gender}}" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    </div>

                                    </div>


                                    </div>


</div>
</div>
<div class="text-xs-right">
    <input type="submit" class="mb-5 btn btn-rounded btn-info" value="Submit">
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
