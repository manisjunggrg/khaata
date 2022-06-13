@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Khaata Management System</h2>
                <h3>Customer Details</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('customer.create')}}"> Add New Customer</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Image</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
        <tr>
                    <td>{{++$i}}</td>
                <td>{{$customer->name}}</td>
                <td><img style="width:80px;height:80px" src="/image/{{$customer->image}}"> </td>
                <td>{{$customer->phonenumber}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>
                    <form action="{{route('customer.destroy',$customer->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('customer.show',$customer->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('customer.edit',$customer->id)}}">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
        </tr>
        </tbody>
        @endforeach
    </table>
            {!! $customers->links() !!}
@endsection
