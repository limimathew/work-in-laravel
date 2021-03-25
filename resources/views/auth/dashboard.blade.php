<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash board</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
   
</head>
<body>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">name</th>
      <th scope="col">email</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      
    <td>{{$LoggedUserInfo['name']}}</td>
      <td>{{$LoggedUserInfo['email']}}</td>
      
    </tr>
    
  </tbody>
</table>
<a href="logout">logout</a>
</body>
</html>