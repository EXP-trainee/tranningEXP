<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show comment</title>
    <style>
        table, th, td{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    
<form action="">
    <table>
        <tr>
            <th>User ID</th>
            <th>User name</th>
            <th>Comment</th>
  
        </tr>
      @foreach ($comments as $item)
        <tr>
            <td>{{$item->user_id}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->comment}}</td>
        </tr>
      @endforeach
    </table>
  </form>
  
</body>
</html>