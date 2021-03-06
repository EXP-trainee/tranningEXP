@extends('admin.dashboard.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Create Workdays User Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Workdays User Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">List Workdays User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('workdays.store')}}" method="POST">
              <div class="card-body">
                @csrf
                {{-- @method('POST') --}}
                  <div class="form-group">
                      <label for="username">Full name</label>
                      <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                  </div>
           
                  <div class="form-group">
                      <label for="month">month</label>
                      <input type="text" name="month" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">1-12</small>
                  </div>
          
                  <div class="form-group">
                      <label for="workdays">workdays</label>
                      <input type="text" name="workdays" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">1-31</small>
                  </div>
          
                  <div class="form-group">
                      <label for="daysoff">days off</label>
                      <input type="text" name="daysoff" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">4-16</small>
                  </div>
          
                  <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">id cua user dang nhap</small>
                </div>
                
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
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

<!-- Content Wrapper. Contains page content -->


