@extends('backend.admin_master')

@section('dashboard')
<section class="content">
    <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">User categories list</h3>
                <a href="" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add user category</a>			  
                </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                           <tr>
                   <th width="5%">SL</th>  
                   <th>Name</th> 
                   <th>Date registered</th>
                   <th>Role</th> 
                   <th></th> 
                   <th width="25%">Action</th>
                   </tr>
                   </thead>
                   <tbody>
                       @foreach ($user_model as $key=> $user )
                           
                           <tr>
                   <td>{{$user->email}}</td>
                                           
                   <td>a</td>
                   <td>a</td>
                   <td>a</td>

                   <td>a</td>				 
                   <td>
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-info">Edit</a>
                   <a href="" class="btn btn-danger" id="delete">Delete</a>
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