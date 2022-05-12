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
                        <a href="" class="btn btn-success">Add New Products</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>Coupon</th>
                        <th>Address</th>
                        <th>Ordered</th>
                        <th>Isdelivered</th>
                        <th>Isprocessing</th>
                        <th>Isshippped</th>
                        <th>Date of order</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection