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
            <h1> Infomation Customer Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Infomation Customer Page</li>
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
            <div class="col-md-10">
              <div class="card">
                <div class="card-header">
                  
                  {{-- <h3 class="card-title"><a href="{{route('infouser.create')}}"><button class="btn btn-primary">Create InfoUser</button></a></h3> --}}
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>STT</th>
                            <th>Full name</th>
                            <th>email</th>
                            <th>Number Phone</th>
                            <th>Date of Birth</th>
                            <th>Sex</th>
                            <th>Address</th>
                            <th>User ID</th>

                        </tr>
                      </thead>
                
                      <tbody>
                        <tr>
                            <td>{{$infouser->id}}</td>
                            <td>{{$infouser->username}}</td>
                            <td>{{$infouser->email}}</td>
                            <td>{{$infouser->numberphone}}</td>
                            <td>{{$infouser->dateofbirth}}</td>
                            <td>{{$infouser->sex}}</td>
                            <td>{{$infouser->address}}</td>
                            <td>{{$infouser->user_id}}</td>

                        </tr>
                      </tbody>
                
                    </table>
                  </div> 
                  <!-- /.card-body -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Full name</th>
                          <th> Salary</th>
                          <th>Taxation</th>
                          <th>User ID</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>{{$salary->id}}</td>
                            <td>{{$salary->username}}</td>
                            <td>{{$salary->salary}}</td>
                            <td>{{$salary->taxation}}</td>
                            <td>{{$salary->user_id}}</td>
                        </tr>
                      </tbody>
                
                    </table>
                  </div> 
                  <!-- /.card-body -->

                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th> Name</th>
                          <th>month</th>
                          <th>workdays</th>
                          <th>days off</th>
                          <th>User ID</th>

                        </tr>
                      </thead>
                      @foreach ($workdays as $item)
                      <tbody>
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->username}}</td>
                          <td>{{$item->month}}</td>
                          <td>{{$item->workdays}}</td>
                          <td>{{$item->daysoff}}</td>
                          <td>{{$item->user_id}}</td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div> 
                  <!-- /.card-body -->


              </div>
              <!-- /.card -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection


