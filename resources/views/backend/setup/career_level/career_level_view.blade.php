@extends('backend.admin_master')

@section('dashboard')

<section class="content">
    <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Career Level lists</h3>
                <a href="{{route('career.level.add')}}" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add</a>
                </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                           <tr>
                   <th width="5%">S/L</th>
                   <th>Career level</th>
                   <th>Status</th>
                   <th width="25%">Action</th>
                   </tr>
                   </thead>
                   <tbody>
                    @foreach ($careers as $key=> $career )

                    <tr>
                    <td>{{$key+1}}</td>
                   <td>{{$career->name}}</td>
                   <td>{{$career->status}}</td>
                   <td>
                    <a   class="btn btn-info"><i class="fa fa-edit"></i></a>
                   <a class="btn btn-primary"><i class="fa fa-eye"></i></a>
                   <a  id="delete" class="btn btn-danger"><i class="fa fa-check"></i></a>

                   </td>
                   </tr>
                   @endforeach

                   </tbody>
                   <tfoot>
                   </tfoot>
                   </table>
                   {{-- {{ $companies->links() }} --}}
                   </div>
                   </div>
                   <!-- /.box-body -->
                 </div>
                 <!-- /.box -->


               </div>
        </div>
</section>

@endsection
