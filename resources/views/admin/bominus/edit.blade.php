@extends('admin.dashboard.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Bominus User Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update Bominus User Form</li>
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
              <h3 class="card-title">List Bominus User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('bominus.update',['bominus'=>$findBominus->id])}}" method="POST">
              @method('PUT')
              <div class="card-body">
                @csrf
                <div class="form-group">
                  <label for="username">Full name</label>
                  <input value="{{$findBominus->username}}" type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
      
                <div class="form-group">
                    <label for="bonus">Bonus</label>
                    <input value="{{$findBominus->bonus}}" type="text" name="bonus" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="minus">Minus</label>
                    <input value="{{$findBominus->minus}}" type="text" name="minus" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="month">month</label>
                    <input value="{{$findBominus->month}}" type="text" name="month" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="form-group">
                  <label for="user_id">User ID </label>
                  <input value="{{$findBominus->user_id}}" type="text" name="user_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
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



