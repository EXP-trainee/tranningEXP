<h1> day la trang thong  tin ca nhan</h1>
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
            <th>action</th>
        </tr>
      </thead>
      @foreach ($infouser as $item)
      <tbody>
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->numberphone}}</td>
            <td>{{$item->dateofbirth}}</td>
            <td>{{$item->sex}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->user_id}}</td>
            <td>
                
            </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div> 
  <!-- /.card-body -->
