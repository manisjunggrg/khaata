@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
            </div>
        </div>
    </div>

{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    <form id="commonForm" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Address">
                    @if($errors->has('address'))
                        <div class="error">{{ $errors->first('address') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phonenumber:</strong>
                    <input type="text" name="phonenumber" class="form-control" placeholder="PhoneNumber">
                    @if($errors->has('phonenumber'))
                        <div class="alert alert-danger">{{ $errors->first('phonenumber') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    @if($errors->has('email'))
                        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    @if($errors->has('image'))
                        <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
{{--    <script>--}}
{{--        $().ready(function(){--}}

{{--            $("#commonForm").validate({--}}
{{--                rules : {--}}
{{--                    name : {--}}
{{--                        required:true,--}}
{{--                        // maxlength : 30--}}
{{--                    },--}}
{{--                    address : {--}}
{{--                        required:true,--}}
{{--                        // maxlength : 20--}}
{{--                    },--}}
{{--                    phonenumber : {--}}
{{--                        required : true,--}}
{{--                        number:true,--}}
{{--                        // minlength:5,--}}
{{--                    },--}}
{{--                    email : {--}}
{{--                        required : true,--}}
{{--                        email : true--}}
{{--                    },--}}
{{--                    image:{--}}
{{--                        required:true,--}}
{{--                        extension: "jpg|jpeg|png|ico|bmp"--}}
{{--                    }--}}
{{--                },--}}
{{--                messages : {--}}
{{--                    name : {--}}
{{--                        required:"please enter name",--}}
{{--                    },--}}
{{--                    address : {--}}
{{--                        required:"Please enter your lastname",--}}
{{--                        maxlength:"length not more than 50"--}}
{{--                    },--}}
{{--                    phonenumber: {--}}
{{--                        required:"please enter phonenumber",--}}
{{--                        number:"only numbers",--}}
{{--                        minlength:"must not be more than 5 digits",--}}
{{--                        maxlength:"must not be more than 10 digits"--}}
{{--                    },--}}
{{--                    email :{--}}
{{--                        required : "Please enter email",--}}
{{--                        email : "must be email"--}}
{{--                    },--}}
{{--                    image:{--}}
{{--                        required:"please insert image",--}}
{{--                        extension:"check extension format"--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
@endsection

