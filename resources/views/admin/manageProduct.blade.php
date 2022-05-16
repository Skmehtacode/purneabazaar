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
                        <h6>Manage Products</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{route('product.create')}}" class="btn btn-success">Add New Products</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                        @foreach ($product as $item)
                           <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->brand->brand_title}}</td>
                            <td>{{$item->category->cat_title}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->discount_price}} <del>{{$item->price}}</del></td>
                            <td>{{$item->stock}}</td>
                            <td>
                                <img src="{{asset('images/'.$item->image)}}" width="50px" height="auto">
                            </td>
                            <td>
                                <form action="{{ route('product.destroy',[$item]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="X" class="btn btn-danger">
                                    <a href="{{ route('product.edit',[$item]) }}" class="btn btn-info">edit</a>
                                </form>
                            </td>
                           </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection