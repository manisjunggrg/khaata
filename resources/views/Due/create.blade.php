@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dues.index') }}"> Back</a>
            </div>
        </div>
    <form id="commonForm" action="{{ route('dues.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product name:</strong>
                    <select name="product_id" id="product_id" class="form-control">
                        <option value="">Select Product</option>
                        @foreach($products as $product)
                        <option data-price="{{$product->price}}" value="{{$product->id}}">{{$product->product_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Customer name:</strong>
                    <select name="customer_id" id="" class="form-control">
                        @foreach($customers as $customer)
                            <option  value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                        <input type="text" value="" class="form-control" id="price" placeholder="Price" name="product_price">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qunatity:</strong>
                        <input type="text" name="quantity" value="" class="form-control" id="quantity" placeholder="Quantity">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount:</strong>
                    <input type="text" name="amount" value="" class="form-control" id="amount" placeholder="Amount">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Remarks:</strong>
                    <input type="text" name="remarks" class="form-control" placeholder="Remarks">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" id="" class="form-control">
                        <option value="1">Paid</option>
                        <option value="0">Unpaid</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
@push('script')
            <script>
                $("#product_id").change(function() {
                    var newPrice = $("#product_id option:selected").data('price');

                    $("#price").val(newPrice);
                });
                $("#quantity").change(function() {
                    var price =$("#price").val()
                    var quantity =$(this).val()
                    var amount = price * quantity
                    $("#amount").val(amount);
                });
            </script>
@endpush
