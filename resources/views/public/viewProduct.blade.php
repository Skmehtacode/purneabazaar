@extends("public.master")
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-3">
                @include('public.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset("images/".$product->image)}}" class="w-100" alt="">
                    </div>
                    <div class="col-8">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <td>{{$product->title}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{$product->category->cat_title}}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>
                                    <h5><del>Rs {{$product->price}}/-</del></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Offer Price</th>
                                <td>
                                    <h5>Rs {{$product->discount_price}}/-</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{$product->brand->brand_title}}</td>
                            </tr>
                            <tr>
                                <th>Qty</th>
                                <td>{{$product->stock}}</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col">
                                <a href="{{route("cart")}}" class="btn btn-success">Add To cart</a>
                                <a href="" class="btn btn-warning">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="card">
                        <div class="card-header">Description</div>
                            <div class="card-body">
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
