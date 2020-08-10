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
                      <label for="email">Email</label>
                      <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                  </div>
          
                  <div class="form-group">
                      <label for="numberphone">Number Phone</label>
                      <input type="text" name="numberphone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">10 chữ số</small>
                  </div>
          
                  <div class="form-group">
                      <label for="dateofbirth">Date of birth </label>
                      <input type="text" name="dateofbirth" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">yyyy/mm/dd</small>
                  </div>
          
                  <div class="form-group">
                      <label for="sex">Sex</label>
                      <input type="text" name="sex" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">nam/nữ/giới tính khác</small>
                  </div>
          
                  <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">tỉnh /thành phố</small>
                  </div>

                  <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">id user dang nhap</small>
                  </div>
                {{-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
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


