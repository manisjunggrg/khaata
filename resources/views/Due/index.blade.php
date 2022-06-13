@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Khaata Management System</h2>
                <h3>Due Details</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('dues.create')}}"> Add Due</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Changes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dues as $due)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{$due->customer->name}}</td>
                <td>{{$due->product->product_name ?? 'N/A'}}</td>
                <td>{{ $due->amount }}</td>
                <td>{{$due->status ? 'Paid' : 'Unpaid'}}</td>
                <td>
                    <form action="{{route('dues.destroy',$due->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('dues.show',$due->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('dues.edit',$due->id)}}">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

{!! $dues->links() !!}
@endsection
