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
                        <h6>Manage Address</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{route('address.create')}}" class="btn btn-success">Add New Address</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Street</th>
                        <th>Landmark</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($address as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->user_id}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->street}}</td>
                            <td>{{$item->landmark}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->pincode}}</td>
                            <td>{{$item->state}}</td>
                            <td>
                                <form action="{{route('address.destroy',[$item])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="X">
                                    <a href="{{route('address.edit',[$item])}}" class="btn btn-success">edit</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection