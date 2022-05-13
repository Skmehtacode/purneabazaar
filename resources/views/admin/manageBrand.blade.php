@extends('admin.base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                @if (($msg = Session::get("success")))
                        <div class="alert bg-success text-white">
                                {{$msg}}
                        </div>
                    @endif
                    @if (($msg = Session::get("error")))
                        <div class="alert bg-danger text-white">
                                {{$msg}}
                        </div>
                    @endif
                <div class="row">
                    <div class="col-8">
                        <h4>Manage Brand</h4>
                    </div>
                    <div class="col-4">
                        <a href="{{route("brand.create")}}" class="btn btn-success">Add New Brand</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($brands as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->brand_title}}</td>
                            <td>
                                <form action="{{route('brand.destroy',[$item]) }}" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" class="btn btn-danger" value="X">
                                    <a href="{{route('brand.edit',[$item]) }}"class="btn btn-info small">edit</a>     
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection