@extends('backend.admin_master')

@section('dashboard')

<section class="content">
    <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Companies list</h3>
                <a href="{{route('company.add')}}" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add company</a>
                </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                           <tr>
                   <th width="5%">Logo</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Description</th>
                   <th width="25%">Action</th>
                   </tr>
                   </thead>
                   <tbody>
                    @foreach ($companies as $key=> $company )

                    <tr>

                        <td>{{$key+1}}</td>
                   <td>{{$company->name}}</td>
                   <td>{{$company->email}}</td>
                   <td>{{$company->description}}</td>
                   <td>
                    <a href="{{route('company.edit', $company->id)}}" class="btn btn-info">Edit</a>
                   <a href="{{route('company.delete',$company->id)}}" class="btn btn-danger" id="delete">Delete</a>
                   </td>
                   </tr>
                   @endforeach

                   </tbody>
                   <tfoot>
                   </tfoot>
                   </table>
                   {{ $companies->links() }}

                   </div>
                   </div>
                   <!-- /.box-body -->
                 </div>
                 <!-- /.box -->


               </div>
        </div>
</section>

@endsection
