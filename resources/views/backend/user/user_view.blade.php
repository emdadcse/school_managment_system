@extends('admin.admin_master')
@section('main_content')



<section class="content">
    <div class="row">

        <div class="col-12">

            <div class="box">
               <div class="box-header with-border">
                 <h3 class="box-title">Data Table With Full Features</h3>
                 <a href="{{route('user.add')}}" style="float:right" class="btn btn-success rounded ">Add User</a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                   <div class="table-responsive">
                     <table id="example1" class="table table-bordered table-striped">
                       <thead>
                           <tr>
                               <th>SL</th>
                               <th>Role</th>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($userAll as $key=>$user)
                           <tr>
                               <td width="5%">{{$key+1}}</td>
                               <td>{{$user->user_type}}</td>
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td>
                               <td width="25%">
                                   <a href="http://" class="btn btn-info">View</a>
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

</section>
@endsection
