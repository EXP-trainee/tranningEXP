@extends('admin.dashboard.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Role User Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update role User Form</li>
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
              <h3 class="card-title">Form update role</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('role.update',['role'=>$findRole->id])}}" method="POST">
              @method('PUT')
              <div class="card-body">
                @csrf
                <div class="form-group">
                  <label for="name"> name</label>
                  <input value="{{$findRole->name}}" type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
      
                <div class="form-group">
                    <label for="guard_name">Guard name</label>
                    <input value="{{$findRole->guard_name}}" type="text" name="guard_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">UPDATE</button>
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



