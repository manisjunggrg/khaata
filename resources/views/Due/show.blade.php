@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Due Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dues.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Customer name:{{$due->customer->name}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name: {{$due->product->product_name}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price: {{$due->product_price}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity: {{$due->quantity}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount: {{$due->amount}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remarks: {{$due->remarks}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status: {{$due->status  ? 'Paid' : 'Unpaid'}}</strong>
            </div>
        </div>
    </div>
    <form action="{{route('dues.destroy',$due->id)}}" method="POST">
    <a class="btn btn-primary" href="{{route('dues.edit',$due->id)}}">Edit</a>
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
