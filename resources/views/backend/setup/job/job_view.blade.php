@extends('backend.admin_master')

@section('dashboard')
<section class="content">
    <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">List of Available Jobs</h3>
                <a href="{{route('jobs.add')}}" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add new jobs</a>
                </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                           <tr>
                   <th width="5%">SL</th>
                   <th>Title</th>
                   <th>Date posted</th>
                   <th>Location</th>
                   <th>Company</th>
                   <th width="25%">Action</th>

                   </tr>
                   </thead>
                   <tbody>
@foreach ($jobs as $job)

                   <tr>
                   <td>1</td>
                   <td>{{ $job->title }}</td>
                   <td>
                    {{ Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                  </td>
                   <td>{{$job->location}}</td>
                   <td>{{$job->company_id}}</td>

                   <td>
                    <a  class="btn btn-info"><i class="fa fa-edit"></i></a>
                   <a href="{{url("home/details/job/{$job->id}/{$job->company_id}")}}" class="btn btn-primary"><i class="fa fa-check"></i></a>

                   <a href=""  class="btn btn-danger"><i class="fa fa-eye"></i></a>

                   </td>
                   </tr>
@endforeach

                   </tbody>
                   <tfoot>
                   </tfoot>
                   </table>
                   </div>
                   </div>
                   <!-- /.box-body -->
                 </div>
                 <!-- /.box -->


               </div>
        </div>
</section>




@endsection
