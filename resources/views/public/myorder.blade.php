@extends('public.master')
@section('content')
    <div class="container-fluid bg-dark text-white p-2 shadow sticky-top">
        <div class="container">
            <h4 class="h2 fw-lighter">My Order</h4>
        </div>
    </div>
    <div class="container mt-3">
        @foreach ($order as $orders)
            <div class="card mb-5">
                <div class="card-header">
                    <span class="float-start">
                        Order id: BIRPUR00000000{{ $orders->payment->order_id }}
                    </span>
                    <span class="float-end">
                        Total Amount : {{ $orders->payment->amount }}
                    </span>
                </div>
                <div class="card-body">
                    @foreach ($orders->orderItem as $item)
                        <div class="card mb-1">
                            <div class="row">
                                <div class="col-1">
                                    <img src="{{ asset('images/' . $item->product->image) }}" alt=""
                                        style="object-fit:cover;height:80px" class="w-100">
                                </div>
                                <div class="col-11">
                                    <p>{{ $item->product->title }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div class="div">
                        Date: {{$orders->dateOfOrderd}}
                    </div>
                    <div class="div">
                        <strong>Status : 
                            @if ($orders->isProcessing && $orders->isShipped && $orders->isDeliverd)
                                <span class="badge bg-success text-white">Delivered</span>
                            @elseif ($orders->isShipped && $orders->isProcessing)
                                <span class="badge bg-warning text-white">Shipped</span>
                            @elseif ($orders->isProcessing)
                                <span class="badge bg-primary text-white">Processing</span>
                                <button type="button" class="btn btn-danger btn-sm">Cancel Order</button>
                            @else
                                <span class="badge bg-info text-white">Order Created</span>
                                <button type="button" class="btn btn-danger btn-sm">Cancel Order</button>

                            @endif
                        </strong>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
