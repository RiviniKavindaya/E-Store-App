@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif
<div class="btn-primary" style="padding:5px"><h1 style="text-align:center">Customer Registration</h1></div>
<form action="{{route('users3.store')}}" method="post">
 @csrf
 <diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
    
     <div class="mb-2 row">
         <div class="col-sm-2"></div>
         <label for="name" class="col-sm-2 col-form-label">Name</label>
         <div class="col-sm-4">
         <input type="name" class="form-control" name="name" required>
         </div>
     </div>
 
     <div class="mb-2 row">
         <div class="col-sm-2"></div>
         <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
         <div class="col-sm-4">
         <input type="email" class="form-control" name="email" required>
         </div>
     </div>
 
     <div class="mb-2 row">
         <div class="col-sm-2"></div>
         <label for="gender" class="col-sm-2 col-form-label">Gender</label>
         <div class="col-sm-4">
         <select name="gender" class="form-select"  aria-label="Default select example" required>
             <option selected disabled>Open this select menu</option>
             <option value="m">Male</option>
             <option value="f">Female</option>
         </select>
         </div>
     </div>
 
     <div class="mb-2 row">
         <div class="col-sm-2"></div>
         <label for="mobile" class="col-sm-2 col-form-label">Address</label>
         <div class="col-sm-4">
         <input type="address" class="form-control" name="address" required>
         </div>
     </div>
 
     <div class="mb-2 row">
         <div class="col-sm-2"></div>
         <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
         <div class="col-sm-4">
         <input type="number" class="form-control" name="mobile" required>
         </div>
     </div>
     
   
     <div class="mb-2 row">
     <div class="col-sm-2"></div>
         <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
         <div class="col-sm-4">
         <input type="password" class="form-control" name="password" required>
         </div>
     </div>
     <input type="hidden" name="role" value="customer">
     <div>
 
     <button type="submit" name="reg" class="btn btn-primary">Sign Up</button>
     </div>
     
 </diV>
 </form>
</body>
</html>
@endsection('content')