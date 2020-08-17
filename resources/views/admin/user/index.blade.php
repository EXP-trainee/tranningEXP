@extends('admin.dashboard.index')
@section('content')

{{-- @if(session('thongbao'))
  <div class="alert alert-success">
      {{session('thongbao')}}
  </div>
@endif --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Infomation User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Infomation User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                 
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th>STT</th>
                          <th> Name</th>
                          <th> Department </th>
                          <th>Position</th>
                          <th>workdays</th>
                          <th>days off</th>
                          <th>Bonus</th>
                          <th>Minus/th>
                          <th>Salary</th>
                          <th>Salary Total </th>
                          <th>action</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->infouser->username}}</td>
                        <td>{{$user->personnel->departments}}</td>
                        <td>{{$user->personnel->position}}</td>
                        <td>{{$user->workday->workdays}}</td>
                        <td>{{$user->workday->daysoff}}</td>
                        <td>{{$user->bominu->bonus}}</td>
                        <td>{{$user->bominu->minus}}</td>
                        <td>{{$user->salary->salary}}</td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fa fa-edit " aria-hidden="true"></i></a>
                            
                            <form action="#" method="post">
                              @csrf
                              <input type="hidden"  name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden ="true"></i></button>
                            </form>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>

                  </table>
                </div> 
                <!-- /.card-body -->

              <!-- /.card -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

