@extends('layout')
@section('content')
<div class="btn-primary" style="padding:5px"><h1 style="text-align:center">E-store</h1></div>   
<div class="btn-info col-sm-12">
        <a><button class="btn col-sm-2 btn-info">Admin Name</button></a>
        <a href="{{route('products.index')}}"><button class="btn col-sm-3 btn-info">Products</button></a>
        <a href="#"><button class="btn col-sm-3 btn-info">Employees</button></a>
        <a href="{{url('logout')}}"><button class="btn col-sm-3 btn-info" style="text-align:right">Logout</button></a>
</div>

                <a class="btn btn-success" href="{{route('products.create')}}"> create new product</a>
           
   
   <!-- success alert message -->
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>

            <th width="280px">Action</th>
            
        </tr>
       <!-- @php($i=0) -->
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>        <!--++$i; -->
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>
                 <form action="{{route ('products.destroy',$product->id)}}" method="POST">
                    <a class="btn btn-primary" href="{{route('products.show',$product->id)}}">show</a>
                    <a class="btn btn-info" href="{{route('products.edit',$product->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
@endsection('content')