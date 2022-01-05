@extends('backend.admin_master')

@section('dashboard')

<section class="content">
    <div class="row">
            <div class="col-12">
                <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Career Level lists</h3>
                <a href="{{route('functions.add')}}" style="float: right;" class="mb-5 btn btn-rounded btn-success"> Add</a>
                </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                           <thead>
                           <tr>
                   <th width="5%">S/L</th>
                   <th>Functional level</th>
                   <th>Status</th>
                   <th width="25%">Action</th>
                   </tr>
                   </thead>
                   <tbody>
                    @foreach ($functions as $key=> $function )

                    <tr>
                    <td>{{$key+1}}</td>
                   <td>{{$function->name}}</td>
                   <td>{{$function->status=='1'? 'Active' : 'Inactive'}}</td>
                   <td>


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
