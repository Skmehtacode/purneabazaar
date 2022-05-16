@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h3>Insert Address here</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("address.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                               <div class="row">
                                    <div class="mb-3 col">
                                        <label for=""> user_id</label>
                                        <select name="user_id" id="" class="form-select">
                                            @foreach ($user as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('contact')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                   </div>
                                   <div class="mb-3 col">
                                       <label for="">street</label>
                                       <input type="text" name="street" class="form-control" value="{{old('street')}}">
                                       @error('street')
                                           <p class="small text-danger">{{$message}}</p>
                                       @enderror
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="mb-3 col ">
                                        <div class="label">landmark</div>
                                        <input type="text" name="landmark" class="form-control" value="{{old('landmark')}}">
                                        @error('landmark')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                   </div>
                                   <div class="mb-3 col">
                                        <div class="label">Pincode</div>
                                        <input type="text" name="pincode" class="form-control" value="{{old('pincode')}}">
                                        @error('pincode')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="mb-3 col">
                                        <div class="label">City</div>
                                        <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                        @error('city')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col">
                                        <div class="label">State</div>
                                        <input type="text" name="state" class="form-control" value="{{old('state')}}">
                                        @error('state')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col">
                                        <div class="label">Name</div>
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                        @error('name')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col">
                                        <div class="label">Contact</div>
                                        <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                                        @error('contact')
                                            <p class="small text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Type</label>
                                        <div class="mb-1 col px-3 rounded py-1 d-flex border border-1">
                                          <div class="mx-3">
                                            <input type="radio" name="type" value="home" class="me-5 form-check-input me-1">
                                            <label for="" class="me-5 form-check-label">home</label>
                                          </div>
                                          <div class="mx-3">
                                            <input type="radio" name="type" value="office" class="me-5 form-check-input me-1">
                                            <label for="" class="me-5 form-check-label">office</label>
                                          </div>
                                        </div>
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