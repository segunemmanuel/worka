@extends('backend.admin_master')

@section('dashboard')

<section class="content">
    <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Companies list</h3>
                <a href="" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add companies</a>
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

                    <tr>
                    <td>1</td>
                   <td></td>
                   <td>a</td>
                   <td>a</td>
                   <td>a</td>
                   <td>
                    <a href="" class="btn btn-info">Edit</a>
                   <a href="" class="btn btn-danger" id="delete">Delete</a>
                   </td>
                   </tr>
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
