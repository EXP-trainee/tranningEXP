@extends('admin.dashboard.index')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Salary User Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update Salary User Form</li>
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
              <h3 class="card-title">List Salary User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('salary.update',['salary'=>$findSalary->id])}}" method="POST">
              @method('PUT')
              <div class="card-body">
                @csrf
                <div class="form-group">
                  <label for="username">Full name</label>
                  <input value="{{$findSalary->username}}" type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted"></small>
                </div>
      
                <div class="form-group">
                    <label for="workdays">Workdays</label>
                    <input value="{{$findSalary->workdays}}" type="text" name="workdays" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="coefficients_salary">Coefficients Salary</label>
                    <input value="{{$findSalary->coefficients_salary}}" type="text" name="coefficients_salary" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">10 số</small>
                </div>
        
                <div class="form-group">
                    <label for="bonus">Bonus</label>
                    <input value="{{$findSalary->bonus}}" type="text" name="bonus" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
        
                <div class="form-group">
                    <label for="taxation">Taxation</label>
                    <input value="{{$findSalary->taxation}}" type="text" name="taxation" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">tỉnh/thành phố</small>
                </div>

                <div class="form-group">
                  <label for="total">Total </label>
                  <input value="{{$findSalary->total}}" type="text" name="total" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">yyyy/mm/dd</small>
                </div>
                <div class="form-group">
                  <label for="users_id">User ID </label>
                  <input value="{{$findSalary->users_id}}" type="text" name="users_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">yyyy/mm/dd</small>
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



