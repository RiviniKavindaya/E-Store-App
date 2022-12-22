@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

  @if ($message=Session::get('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
<div class="btn-primary" style="padding:5px"><h1 style="text-align:center">E-store</h1></div>
<form action="{{url('login')}}" method="post">

  <diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
  
    {{ csrf_field() }}
    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
        <input type="email" class="form-control" name="email" required>
        </div>
    </div>
  
    <div class="mb-2 row">
    <div class="col-sm-2"></div>
        <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" name="password" required>
        </div>
        
    </div>
    <div>
    <button type="submit" name="login" class="btn btn-primary">Sign in</button>
    </div>
    
</diV>
</form>
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <a href="{{url('reg')}}"><button type="submit" class="btn btn-primary">Register Now!</button></a>
</diV>
</body>
</html>
@endsection('content')