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
                        <h6>Manage Category</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{route("category.create")}}" class="btn btn-success">Add New Category</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Parent id</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($category as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->cat_title}}</td>
                            <td>{{$item->parent_id}}</td>
                            <td>
                                    <form action="{{route('category.destroy',[$item]) }}" method="post">
                                        @csrf
                                        @method("delete")
                                        <input type="submit" class="btn btn-danger" value="X">
                                        <a href=""class="btn btn-info small">edit</a>     
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection