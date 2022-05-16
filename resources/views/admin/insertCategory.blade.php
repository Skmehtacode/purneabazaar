@extends("admin.base")
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include("admin.side")
            </div>
            <div class="col-4 mx-auto">
                <h2>Insert category here</h2>
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{route("category.store")}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Parent</label>
                                <select name="parent_id" class="form-select" value="{{old("parent_id")}}">
                                    <option value="0">Main category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                    @endforeach
                                </select>
                                @error('parent_id')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">category title</label>
                                <input type="text" name="cat_title" value="{{old('cat_title')}}" class="form-control">
                                @error('cat_title')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit"  name="Create Category" class="btn btn-info w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection