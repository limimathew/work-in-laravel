<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <script>
var stateObject = {
"kerala": { "pathanamthitta": ["Adoor", "Vadakadathukavu"],
"kollam": ["kundara", "kottarakara"],
"TVM": ["sreekaryam", "chavadimuk"],
},
"Tamil Nadu": {
"Koyambuthoor": ["palani", "machiii"],
"chenni": ["vattapara", "Theni"]
}, "Karnadaka": {
"Banglore": ["bagcota", "paramada"],
"bellari": ["thenni", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>

</head>
<body>
    
<form action="register">

<div class="row mt-5">
 <div class="col-xl-4 m-auto">
<div class="card-header">
  <h4 class="card-title font-weight-bold"> Registeration Form  </h4>
 
  <div class="card-body">
  <div class="form-group">
   <label for="name"> Select Type</label>
  <input type="radio" name="r1" >Individual
  <input type="radio" name="r1">  Organization
 
  </div>
 <div class="form-group">
   <label for="name"> Name <span class="text-danger">*  </label>
  <input type="text" name="name" class="form-control">
 
  </div>
  <div class="form-group">
   <label for="name"> Date of Birth <span class="text-danger">*  </label>
  <input type="date" name="dob" class="form-control">
 
  </div>
  <div class="form-group">
   <label for="name"> Mail id <span class="text-danger">*  </label>
  <input type="text" name="email" class="form-control">
  
  </div>
  <div class="form-group">
   <label for="name"> Phone <span class="text-danger">*  </label>
  <input type="phone" name="phone" class="form-control">
 
  </div>
  <div name="myform" id="myForm" >
State: <select name="state" id="countySel" size="1" class="form-control">
<option value="" selected="selected"></option>
</select>

<br>
<br>
Select district: <select name="district" id="stateSel" size="1"class="form-control">
<option value="" selected="selected"></option>
</select>
<br>
<br>
Select Block: <select name="block" id="districtSel" size="1" class="form-control">
<option value="" selected="selected"></option>
</select><br>
 </div> 
  <div class="form-group">
   <label for="password"> password<span class="text-danger">*  </label>
  <input type="text" name="password" class="form-control">
 
  </div>

 


 
  <button type="submit" class="btn btn btn-success mt-2">Register</button>
 
  <button type="submit" class="btn btn btn-primary mt-2 text-white"><a href="log">login</a></button>
</div>
</div>  
</form>   

                    
        
                           
                            
</body>
</html>