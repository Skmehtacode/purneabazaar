@extends("public.master")
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                    <a href="" class="list-group-item list-group-item-action">Item 1</a>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <img src="https://via.placeholder.com/500.jpg" class="w-100" alt="">
                    </div>
                    <div class="col-8">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <td>This is product title</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>Mobile</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>
                                    <h5><del>Rs 600/-</del></h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Offer Price</th>
                                <td>
                                    <h5>Rs 200/-</h5>
                                </td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>puma</td>
                            </tr>
                            <tr>
                                <th>Qty</th>
                                <td>100</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col">
                                <a href="{{route("cart")}}" class="btn btn-success">Add To cart</a>
                                <a href="" class="btn btn-warning">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="card">
                        <div class="card-header">Description</div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, dolores fuga eius ex
                                    officiis maiores veritatis a inventore ut sint, omnis itaque laboriosam aliquid enim quasi?
                                    Debitis porro alias accusamus veritatis eligendi aut dolorem, harum perspiciatis voluptates
                                    eveniet cupiditate explicabo eaque ex dicta ea, dolore commodi vel! Incidunt tempore eveniet
                                    explicabo quasi nostrum. Illo odio, reprehenderit facere corrupti excepturi quis
                                    exercitationem, ea dicta amet officiis laudantium in at! Quaerat sunt facilis dolorum
                                    laudantium voluptatum odit error aut odio consequuntur in eius veniam omnis nam temporibus
                                    ad saepe asperiores, sequi est nisi necessitatibus dolorem doloremque cumque quidem.
                                    Placeat, illum voluptatum. Dicta.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
