@extends('backend.admin_master')
@section('dashboard')
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
<h4 class="box-title">Add a new job</h4>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="row">
<div class="col">
<form method="POST" action="{{route('jobs.store')}}" enctype="multipart/form-data">
    @csrf
<input type="hidden" name="name">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<h5>Title <span class="text-danger">*</span></h5>
<div class="controls">
<input type="text" name="title" class="form-control" value="{{$job->title}}">
@error('title')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>

</div>

<div class="col-md-6">
    <div class="form-group">
    <h5>Location<span class="text-danger">*</span></h5>
    <div class="controls">
        <select name="location" class="form-control">
            <option disabled selected >{{$job->location}}</option>
            <option value="Abia">Abia</option>
            <option value="Adamawa">Adamawa</option>
            <option value="Akwa Ibom">Akwa Ibom</option>
            <option value="Anambra">Anambra</option>
            <option value="Bauchi">Bauchi</option>
            <option value="Bayelsa">Bayelsa</option>
            <option value="Benue">Benue</option>
            <option value="Borno">Borno</option>
            <option value="Cross Rive">Cross River</option>
            <option value="Delta">Delta</option>
            <option value="Ebonyi">Ebonyi</option>
            <option value="Edo">Edo</option>
            <option value="Ekiti">Ekiti</option>
            <option value="Enugu">Enugu</option>
            <option value="FCT">Federal Capital Territory</option>
            <option value="Gombe">Gombe</option>
            <option value="Imo">Imo</option>
            <option value="Jigawa">Jigawa</option>
            <option value="Kaduna">Kaduna</option>
            <option value="Kano">Kano</option>
            <option value="Katsina">Katsina</option>
            <option value="Kebbi">Kebbi</option>
            <option value="Kogi">Kogi</option>
            <option value="Kwara">Kwara</option>
            <option value="Lagos">Lagos</option>
            <option value="Nasarawa">Nasarawa</option>
            <option value="Niger">Niger</option>
            <option value="Ogun">Ogun</option>
            <option value="Ondo">Ondo</option>
            <option value="Osun">Osun</option>
            <option value="Oyo">Oyo</option>
            <option value="Plateau">Plateau</option>
            <option value="Rivers">Rivers</option>
            <option value="Sokoto">Sokoto</option>
            <option value="Taraba">Taraba</option>
            <option value="Yobe">Yobe</option>
            <option value="Zamfara">Zamfara</option>
        </select>
    @error('location')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
    </div>

    </div>

    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <h5>Salary <span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="number"  value="{{$job->salary}}" name="salary" class="form-control">
        @error('salary')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        </div>

        </div>

        <div class="col-md-6">
            <div class="form-group">
            <h5>Gender<span class="text-danger">*</span></h5>
            <div class="controls">
     <select class="form-control"  name="gender">
        <option disabled selected>--Select Sex-</option>
            <option value="female" {{$job->gender == 'female'  ? 'selected' : ''}}>Female</option>
            <option value="male" {{$job->gender == 'male'  ? 'selected' : ''}}>Male</option>

    </select>
     </select>
            @error('gender')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            </div>

            </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <h5>Type <span class="text-danger">*</span></h5>
                <div class="controls">
                    <select class="form-control"  name="type">
        <option disabled selected>--Select type-</option>
        <option value="parttime" {{$job->type == 'parttime'  ? 'selected' : ''}}>Part time</option>
        <option value="fulltime" {{$job->type == 'fulltime'  ? 'selected' : ''}}>Full time</option>
                     </select>
                @error('type')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <h5>Degree required <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select class="form-control"  name="degree">
        <option disabled selected>--Select degree-</option>
        <option value="msc" {{$job->degree== 'msc'  ? 'selected' : ''}}>Msc</option>
        <option value="ssce" {{$job->degree == 'ssce'  ? 'selected' : ''}}>SSCE</option>
        <option value="ond" {{$job->degree == 'ond'  ? 'selected' : ''}}>OND</option>
        <option value="hnd" {{$job->degree == 'hnd'  ? 'selected' : ''}}>HND</option>
        <option value="others" {{$job->type == 'others'  ? 'selected' : ''}}>Others</option>
                         </select>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    </div>

                    </div>

                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            <h5>Description<span class="text-danger">*</span></h5>
                            <div class="controls">
                                                <textarea id="editor1"   name="description" id="" cols="50" rows="10">
                                                    {{$job->description}}
                                                </textarea>
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





            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <h5>Requirements<span class="text-danger">*</span></h5>
                    <div class="controls">
                                        <textarea id="editor2"  name="requirements" id="" cols="50" rows="10">
                                            {{$job->requirements}}

                                        </textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor2' );
                                    </script>
                    @error('requirements')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    </div>

                    </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <h5>Responbilities<span class="text-danger">*</span></h5>
                    <div class="controls">
                                        <textarea id="editor3"  name="responbilities" id="" cols="50" rows="10">
                                            {{$job->responbilities}}

                                        </textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor3' );

                                    </script>
                    @error('responbilities')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    </div>

                    </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <h5>Company<span class="text-danger">*</span></h5>
                    <div class="controls">
                        <select class="form-control"  name="company_id">
                            <option disabled selected>--Select a company-</option>
                            <option value="{{$job->company_id}}">{{$job->company_id}}</option>

                                             </select>
                    @error('company_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
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



