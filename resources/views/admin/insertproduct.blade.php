@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h3>Insert Product here</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("product.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                    @error('title')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                               <div class="mb-3 col">
                                    <label for="">Category</label>
                                    <select name="category_id" id="" class="form-select">
                                        @foreach ($category as $item)
                                            <option value="{{$item->id}}">{{$item->cat_title}}</option> 
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                               </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Brand</label>
                                    <select name="brand_id" id=""  class="form-select" value="{{old('brand_title')}}">
                                        @foreach ($brand as $item)
                                            <option value="{{$item->id}}">{{$item->brand_title}}</option> 
                                        @endforeach
                                    </select>
                                    @error('brand_id')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" value="{{old('image')}}">
                                    @error('image')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Description</label>
                                    <input type="text" name="description" class="form-control" value="{{old('description')}}">
                                    @error('description')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">price</label>
                                    <input type="text" name="price" class="form-control" value="{{old('price')}}">
                                    @error('price')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Discount price</label>
                                    <input type="text" name="discount_price" class="form-control" value="{{old('discount_price')}}">
                                    @error('discount_price')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">Stock</label>
                                    <input type="text" name="stock" class="form-control" value="{{old('stock')}}">
                                    @error('stock')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" value="Insert product" class="btn btn-success w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection