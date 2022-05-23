@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h6>Manage Order</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{route('order.create')}}" class="btn btn-success">Add New Order</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>Address</th>
                        <th>Coupon</th>
                        <th>Isdelivered</th>
                        <th>Isprocessing</th>
                        <th>Isshippped</th>
                        <th>Date of order</th>
                        <th>Ordered</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection