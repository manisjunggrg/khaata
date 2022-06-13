@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form id="commonForm" action="{{ route('customer.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $customer->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $customer->address }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" name="phonenumber" value="{{ $customer->phonenumber }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $customer->email }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $customer->image }}" width="300px">
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
                    name : {
                        required:true,
                        maxlength : 30
                    },
                    address : {
                        required:true,
                        maxlength : 20
                    },
                    phonenumber : {
                        required : true,
                        number:true,
                        minlength:5,
                        maxlength : 10,
                    },
                    email : {
                        required : true,
                        email : true
                    },
                    image:{
                        required:true,
                        extension: "jpg|jpeg|png|ico|bmp"
                    }
                },
                messages : {
                    name : {
                        required:"please enter name",
                    },
                    address : {
                        required:"Please enter your lastname",
                        maxlength:"length not more than 50"
                    },
                    phonenumber: {
                        required:"please enter phonenumber",
                        number:"only numbers",
                        minlength:"must not be more than 5 digits",
                        maxlength:"must not be more than 10 digits"
                    },
                    email :{
                        required : "Please enter email",
                        email : "must be email"
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
