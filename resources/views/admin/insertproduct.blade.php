@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-controll" value="{{old('title')}}">
                            @error('title')
                                <p class="small text-danger"><{{$message}}/p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection