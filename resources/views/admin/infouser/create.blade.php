@extends('admin.dashboard.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> Create Infomation User Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Info User Form</li>
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
              <h3 class="card-title">Infomation User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('infouser.store')}}" method="POST">
              <div class="card-body">
                @csrf
                {{-- @method('POST') --}}
                  <div class="form-group">
                      <label for="username">Full name</label>
                      <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                  </div>
          
                  <div class="form-group">
                      <label for="avatar">avatar</label>
                      <input type="file" name="avatar" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="phone"> Phone</label>
                    <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">10 chữ số</small>
                 </div>
                  <div class="form-group">
                    <label for="phone_2">phone_2</label>
                    <input type="text" name="phone_2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">10 chữ số</small>
                  </div>

                  <div class="form-group">
                    <label for="phone_emergency"> phone_emergency </label>
                    <input type="text" name="phone_emergency" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">10 chữ số</small>
                  </div>

                  <div class="form-group">
                      <label for="sex">Sex</label>
                      <input type="text" name="sex" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">nam/nữ/giới tính khác</small>
                  </div>
          
                  <div class="form-group">
                      <label for="dob">dob</label>
                      <input type="text" name="dob" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">mm/dd/yyyy</small>
                  </div>

                  <div class="form-group">
                    <label for="national_id">national_id</label>
                    <input type="text" name="national_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">id user dang nhap</small>
                  </div>
                  <div class="form-group">
                    <label for="national_id_image">national_id_image</label>
                    <input type="text" name="national_id_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="driving_license">driving_license</label>
                    <input type="text" name="driving_license" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">10 chữ số</small>
                </div>

                <div class="form-group">
                  <label for="driving_license_image"> driving_license_image </label>
                  <input type="text" name="driving_license_image" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="relationship">relationship</label>
                    <input type="text" name="relationship" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="banks">banks</label>
                    <input type="text" name="banks" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="bio">bio</label>
                  <input type="text" name="bio" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="status">status</label>
                  <input type="text" name="status" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>

                <div class="form-group">
                  <label for="user_id">User ID</label>
                  <input type="text" name="user_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">id user dang nhap</small>
                </div>
                <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input value="{{$findInfoUser->user_id}}" type="text" name="user_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">tỉnh/thành phố</small>
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


