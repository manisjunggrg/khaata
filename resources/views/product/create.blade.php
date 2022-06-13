@extends('layout')
@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
{{--    </div> @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    <form id="commonForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product name:</strong>
                    <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                    @if($errors->has('product_name'))
                        <div class="alert alert-danger">{{ $errors->first('product_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea type="text" name="detail" class="form-control" placeholder="Detail" cols="30" rows="10"></textarea>
                    @if($errors->has('detail'))
                        <div class="alert alert-danger">{{ $errors->first('detail') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                    @if($errors->has('price'))
                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
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
{{--                    product_name : {--}}
{{--                        required:true,--}}
{{--                        // maxlength : 30--}}
{{--                    },--}}
{{--                    detail : {--}}
{{--                        required:true,--}}
{{--                        // maxlength : 500,--}}
{{--                        // minlength:10--}}
{{--                    },--}}
{{--                    price : {--}}
{{--                        required : true,--}}
{{--                        number:true,--}}
{{--                        // maxlength : 10,--}}
{{--                    },--}}
{{--                    image:{--}}
{{--                        required:true,--}}
{{--                        extension: "jpg|jpeg|png|ico|bmp"--}}
{{--                    }--}}
{{--                },--}}
{{--                messages : {--}}
{{--                    product_name : {--}}
{{--                        required:"please enter name",--}}
{{--                    },--}}
{{--                    detail : {--}}
{{--                        required:"Please enter your lastname",--}}
{{--                        // maxlength:"length not more than 500",--}}
{{--                        // minlength:"not less than 10"--}}
{{--                    },--}}
{{--                    price: {--}}
{{--                        required:"please enter price",--}}
{{--                        number:"only numbers",--}}
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
