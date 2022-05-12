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
                        <h6>Manage User</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">Add New User</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection