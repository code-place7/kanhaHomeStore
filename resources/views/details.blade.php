@extends('layouts.main')
@push('title')
<title>Products Details </title>
@endpush

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="row g-0 align-items-center">
                    <div class="col-md-6">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid rounded-start-4 w-100" style="object-fit:cover; height:400px;">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body p-4">
                            <h2 class="card-title fw-bold mb-3" style="color:#ff6600;">{{ $product->name }}</h2>
                            <span class="badge bg-gradient mb-3" style="background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%); color: #fff;">{{ $product->category }}</span>
                            <h4 class="fw-bold mb-3" style="color:#6366f1;">₹{{ number_format($product->price, 2) }}</h4>
                            <p class="card-text text-muted mb-4" style="font-size:1.1rem;">{{ $product->description }}</p>
                            <div class="d-flex gap-2 mb-4">
                                @if(session()->has("success"))
                                        <div class="alert alert-success mt-2">
                                            {{ session()->get("success") }}
                                        </div>
                                    @endif
                                    @if(session()->has("error"))
                                        <div class="alert alert-danger mt-2">
                                            {{ session()->get("error") }}
                                        </div>
                                    @endif
                                <a href="{{route('cart.add', $product->id)}}">
                                <button class="btn theme-orange-btn text-light px-4 py-2 rounded-pill fw-semibold">Add to Cart</button>
                                </a>
                                <a href="">
                                <button class="btn btn-outline-primary px-4 py-2 rounded-pill fw-semibold">Buy Now</button>
                                </a>
                            </div>
                            <div class="mt-3">
                                <small class="text-muted">Category: {{ $product->category }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Related Products Section -->
            @if(isset($relatedProducts) && $relatedProducts->count())
            <div class="mt-5">
                <h4 class="fw-bold mb-3">Related Products</h4>
                <div class="row g-4">
                    @foreach($relatedProducts as $related)
                    <div class="col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 rounded-4">
                            <img src="{{ $related->image }}" class="card-img-top rounded-top-4" alt="{{ $related->name }}" style="height:160px; object-fit:cover;">
                            <div class="card-body text-center">
                                <h6 class="card-title mb-2" style="color:#ff6600;">{{ $related->name }}</h6>
                                <span class="badge bg-gradient mb-2" style="background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%); color: #fff;">{{ $related->category }}</span>
                                <div class="fw-bold" style="color:#6366f1;">₹{{ number_format($related->price, 2) }}</div>
                                <a href="{{ route('product.show', $related->id) }}" class="btn btn-sm btn-primary rounded-pill mt-2 px-3">View</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@push('style')
<style>
.bg-gradient {
    background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%);
}
.theme-orange-btn {
    background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%);
    border: none;
}
.rounded-4, .rounded-start-4, .rounded-top-4 {
    border-radius: 1rem !important;
}
.card-title {
    font-family: 'Lato', sans-serif;
}
</style>
@endpush
@endsection