@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Khata Management System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.create')}}"> Create New Product</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
    <tr>
        <td>No</td>
        <td>Product Name</td>
        <td>Image</td>
        <td>Detail</td>
        <td>Price</td>
        <td>Status</td>
    </tr>
        @foreach($products as $product)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$product->product_name}}</td>
        <td><img style="width: 80px;height: 80px" src="/image/{{$product->image}}"></td>
        <td>{{$product->detail}}</td>
        <td>{{$product->price}}</td>
        <td>
            <form action="{{route('products.destroy',$product->id)}}" method="POST">
                <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
@endsection
