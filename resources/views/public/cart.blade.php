@extends("public.master")
@section("content")
<div class="container-fluid bg-dark text-white p-2 shadow sticky-top">
    <div class="container">
        <h4 class="h2 fw-lighter">Your cart</h4>
    </div>
</div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-8">
                <h1>My Cart</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/500.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-9 card-body">
                                    <h5>this is product title</h5>
                                    <p>mobile</p>
                                    <h6>Rs 500 <del>Rs 100</del></h6>
                                    <a href="" class="btn btn-danger">-</a>
                                    <span class="lead fw-bolder">0</span>
                                    <a href="" class="btn btn-success">+</a>
                                    <a href="" class="btn btn-dark float-end">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="list-group">
                    <div class="list group-item list-group-item-action">Total Amount <span  class="float-end">Rs.5000</span></div>
                    <div class="list group-item list-group-item-action bg-success text-white">Total Discount <span  class="float-end">Rs.4000</span></div>
                    <div class="list group-item list-group-item-action ">Tax (18%) <span  class="float-end">Rs.400</span></div>
                    <div class="list group-item list-group-item-action  bg-warning text-dark">Coupon discount <span  class="float-end">Rs.100/-</span></div>
                    <div class="list group-item list-group-item-action  "><h5>Payable Amount</h5> <span  class="float-end">Rs.9000/-</span></div>
                </div>
                <div class="row mt-3 px-2">
                    <a href="" class="btn btn-success col">Continue Shopping</a>
                    <a href="{{route("checkout")}}" class="btn btn-danger col ms-2">checkout</a>
                </div>
            </div>
        </div>
    </div>
@endsection