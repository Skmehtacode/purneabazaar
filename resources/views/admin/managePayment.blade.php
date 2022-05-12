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
                        <h6>Manage Payment</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">New Payment</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Type</th>
                        <th>Bank Name</th>
                        <th>Mode</th>
                        <th>Txn</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Date of Payment</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection