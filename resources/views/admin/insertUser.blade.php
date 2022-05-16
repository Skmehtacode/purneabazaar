@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h3>Insert User here</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("user.store")}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                    @error('name')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="{{old('email')}}" class="form-control">
                                    @error('email')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for=""> Veryfi Email</label>
                                    <input type="text" name="email_verified_at" value="{{old('email_verified_at')}}" class="form-control">
                                    @error('email_verified_at')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3">
                                    <label for="">Contact</label>
                                    <input type="text" class="form-control" name="contact" value="{{old('contact')}}">
                                    @error('contact')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control" name="password" value="{{old('password')}}">
                                    @error('password')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection