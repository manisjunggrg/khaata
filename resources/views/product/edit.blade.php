@extends('layout')
@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Products</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
    </div>
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product name:</strong>
                    <input type="text" name="name" value="{{$product->product_name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea type="text" name="detail"  class="form-control" placeholder="Details" cols="30" rows="10">{{$product->detail}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img style="width: 80px; height: 80px" src="/image/{{$product->image}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <script>
        $().ready(function(){

            $("#commonForm").validate({
                rules : {
                    product_name : {
                        required:true,
                        maxlength : 30
                    },
                    detail : {
                        required:true,
                        maxlength : 500,
                        minlength:10
                    },
                    price : {
                        required : true,
                        number:true,
                        maxlength : 10,
                    },
                    image:{
                        required:true,
                        extension: "jpg|jpeg|png|ico|bmp"
                    }
                },
                messages : {
                    product_name : {
                        required:"please enter name",
                        maxlength:"max length is 50"
                    },
                    address : {
                        required:"Please enter your lastname",
                        maxlength:"length not more than 500",
                        minlength:50
                    },
                    price: {
                        required:"please enter price",
                        number:"only numbers",
                        maxlength:"must not be more than 10 digits"
                    },
                    image:{
                        required:"please insert image",
                        extension:"check extension format"
                    }
                }
            });
        });

    </script>
@endsection
