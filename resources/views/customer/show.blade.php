@extends('layout')
@section('content')
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Customer Details</h2>
        </div>
    </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customer.index') }}"> Back</a>
        </div>
    </div>
    <div class="pull-left">
    <form action="{{route('customer.destroy',$customer->id)}}" method="POST">
        <a class="btn btn-primary" href="{{route('customer.edit',$customer->id)}}">Edit</a>
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $customer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $customer->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                {{ $customer->phonenumber }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $customer->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img style="height: 280px;width:280px " src="/image/{{ $customer->image }}" width="500px">
            </div>
        </div>

    </div>
    <div class="pull-left">
        <h2> Show Customer Due Details</h2>
    </div>
    <table class="table table-bordered">
        <thead>
        <td>No</td>
        <td>Amount</td>
        <td>Status</td>
        <td>Product Name</td>
        </thead>
    @foreach($dues as $i => $due)
        <tbody>
        <td>{{++$i}}</td>
        <td>{{ $due->amount }}</td>
        <td>{{$due->status ?'paid':'unpaid'}}</td>
        <td>{{$due->product->product_name}}</td>
        </tbody>
    @endforeach
        <tbody>
        <td></td>
        <td> <strong>Total Unpaid:{{$customer->totalUnpaid()}}</strong></td>
        <td></td>
        <td></td>
        </tbody>
    </table>
    {!! $dues->links() !!}
@endsection
