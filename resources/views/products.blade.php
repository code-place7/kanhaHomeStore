@extends('layouts.main')
@push('title')
<title>Products </title>
@endpush
@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center" style="letter-spacing:1px;">Available Products</h2>
    <div class="row g-4">
        @foreach($products as $product)
        <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100 shadow-sm border-0 rounded-4 product-card">
                <img src="{{ $product->image }}" class="card-img-top rounded-top-4" alt="{{ $product->name }}" style="height:220px; object-fit:cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-semibold mb-2" style="color:#ff6600;">{{ $product->name }}</h5>
                    <p class="card-text text-muted small mb-2">{{ Str::limit($product->description, 60) }}</p>
                    <div class="mb-3">
                        <span class="badge bg-gradient" style="background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%); color: #fff;">{{ $product->category }}</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-auto">
                        <span class="fw-bold fs-5" style="color:#6366f1;">₹{{ number_format($product->price, 2) }}</span>
                        <a href="{{route('products.details', $product->slug)}}" class="btn btn-sm btn-primary rounded-pill px-3">View</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <div>
            {{$products->Links()}}
        </div>

        @if($products->isEmpty())
        <div class="col-12">
            <div class="alert alert-info text-center rounded-4">
                No products available at the moment.
            </div>
        </div>
        @endif
    </div>
</div>
















@endsection