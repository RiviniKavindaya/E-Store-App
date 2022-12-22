@extends('layout')
<div class="btn-primary" style="padding:5px"><h1 style="text-align:center">E-store</h1></div>   
<div class="btn-info col-sm-12">
        <a><button class="btn col-sm-2 btn-info">Admin Name</button></a>
        <a href="{{route('products.index')}}"><button class="btn col-sm-3 btn-info">Products</button></a>
        <a href="#"><button class="btn col-sm-3 btn-info">Employees</button></a>
        <a href="{{url('logout')}}"><button class="btn col-sm-3 btn-info" style="text-align:right">Logout</button></a>
    </div>
   
   <!-- error messages --> 

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
  
    <form action="{{route('products.update',$product->id)}}"  method="post">
   @csrf
   @method('PATCH')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{$product->detail}}"</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" value="{{$product->price}}" class="form-control">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>