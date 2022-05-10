@extends("public.master")
@section("content")
<div class="container-fluid bg-dark text-white p-2 shadow sticky-top">
    <div class="container">
        <h4 class="h2 fw-lighter">Your checkout</h4>
    </div>
</div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-8 mt-3">
               <div class="card">
                   <div class="card-body">
                       <form action="" method="POST">
                           @csrf
                           <div class="row">
                              <div class="col-4">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                    @error('name')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                              </div>
                              <div class="col-4">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                                    @error('contact')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{old('adddress')}}">
                                    @error('address')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">street/village</label>
                                    <input type="text" name="street" class="form-control" value="{{old('street')}}">
                                    @error('street')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">landmark</label>
                                    <input type="text" name="landmark" class="form-control" value="{{old('landmark')}}">
                                    @error('landmark')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">City</label>
                                    <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                    @error('city')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="">state</label>
                                    <input type="text" name="state" class="form-control" value="{{old('state')}}">
                                    @error('state')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="">Pincode</label>
                                    <input type="text" name="pincode" class="form-control" value="{{old('pincode')}}">
                                    @error('pincode')
                                        <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-6 mt-4 ">
                                    <input type="sumbit" value="Submit"  class="btn btn-success w-100" >
                                </div>
                            </div>
                       </form>
                   </div>
               </div>
            </div>
            <div class="col-4">
                <div class="card mt-3  bg-light">
                    <div class="card-body">
                        <h5>Sonu Kumar (7903738819)</h5>
                        <p class="small">Panchwati chowk Rambagh <br>Purnia</p>
                        <a href="" class="btn btn-warning small">Use this address</a>
                    </div>
                </div>
                <div class="card mt-3  bg-light">
                    <div class="card-body">
                        <h5>Sonu Mehta (9709464571)</h5>
                        <p class="small">Panchwati chowk Rambagh <br>Purnia</p>
                        <a href="" class="btn btn-warning small ">use this address</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection