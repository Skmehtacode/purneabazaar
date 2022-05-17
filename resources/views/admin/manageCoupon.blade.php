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
                        <h6>Manage Coupon</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{route('coupon.create')}}" class="btn btn-success">Add new coupon</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Code</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($coupon as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->amount}}</td>
                            <td>
                                <input type="submit" value="X" class="btn btn-danger">
                                <a href="" class="btn btn-success">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection