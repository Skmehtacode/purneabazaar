@extends("admin.base")
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @include("admin.side")
            </div>
            <div class="col-4 mx-auto">
                <h2>Insert Coupon here</h2>
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{route("coupon.store")}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Code</label>
                                <input type="text" name="code" value="{{old('code')}}" class="form-control">
                                @error('code')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{old('status')}}" class="form-control">
                                @error('status')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Amount</label>
                                <input type="text" name="amount" value="{{old('amount')}}" class="form-control">
                                @error('amount')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="submit" name="submit" class="btn btn-success w-100">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection