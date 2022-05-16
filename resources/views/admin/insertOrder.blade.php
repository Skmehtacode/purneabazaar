@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h3>Insert Order here</h3>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("order.store")}}" method="post" enctype="multipart/form-data">
                            @csrf
                               <div class="row">
                                    <div class="mb-3 col">
                                        <label for=""> user_id</label>
                                        <select name="user_id" id="" class="form-select">
                                            @foreach ($user as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <p class="small text-danger">{{$message}}</p>
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