<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<div class="btn-primary" style="padding:5px"><h1 style="text-align:center">E-store</h1></div>   
<div class="btn-info col-sm-12">
        <a><button class="btn col-sm-2 btn-info">Admin Name</button></a>
        <a href="{{route('products.index')}}"><button class="btn col-sm-3 btn-info">Products</button></a>
        <a href="#"><button class="btn col-sm-3 btn-info">Employees</button></a>
        <a href="{{url('logout')}}"><button class="btn col-sm-3 btn-info" style="text-align:right">Logout</button></a>
    </div>
    <h1 style="text-align:center">Welcome Admin Dashboard</h1>
</body>
</html>