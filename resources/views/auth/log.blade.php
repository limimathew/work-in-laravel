<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
   
</head>
<body>
    
<form action="check">
<div class="row mt-5">
 <div class="col-xl-4 m-auto">
<div class="card-header">
  <h4 class="card-title font-weight-bold"> Login Form  </h4>
 
@if(Session::get('fail'))
<div class="alert alert-danger ">
                               
 {{Session::get('fail')}}
 </div>
  @endif
    </div>
  <div class="card-body">
 
  <div class="form-group">
   <label for="name"> email <span class="text-danger">  </label>
  <input type="text" name="email" class="form-control"  />
  </div>
  <div class="form-group">
   <label for="name"> password<span class="text-danger">  </label>
  <input type="text" name="password" class="form-control"  />
  </div>
 
  <button type="submit" class="btn btn btn-primary mt-2">login</button>
  <button type="submit" class="btn btn btn-success mt-2"><a href="reg">register</a></button>
</div>
</div>  
</form>   

                    
        
                           
                            
</body>
</html>