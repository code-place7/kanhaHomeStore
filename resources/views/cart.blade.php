@extends('layouts.main')

@push('title')
<title>My Cart</title>
@endpush

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-center" style="letter-spacing:1px;">Shopping Cart</h2>
    @if(session('success'))
        <div class="alert alert-success text-center rounded-4">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger text-center rounded-4">{{ session('error') }}</div>
    @endif

    @if($cartItems->isEmpty())
        <div class="alert alert-info text-center rounded-4">
            Your cart is empty.
        </div>
    @else
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive rounded-4 shadow-sm">
                <table class="table align-middle mb-0">
                    <thead class="bg-gradient text-light" style="background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%);">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($cartItems as $item)
                        <tr>
                            <td>
                                <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid rounded-4" style="height:60px; width:60px; object-fit:cover;">
                            </td>
                            <td class="fw-semibold" style="color:#ff6600;">{{ $item->name }}</td>
                            <td class="fw-bold" style="color:#6366f1;">₹{{ number_format($item->price, 2) }}</td>
                            <td>
                                <form method="POST" action="{{ route('cart.remove', $item->cart_id) }}" onsubmit="return confirm('Are you sure you want to remove this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end align-items-center mt-4">
                <h4 class="fw-bold me-4">Total: <span style="color:#6366f1;">₹{{ number_format($cartItems->sum(fn($item) => $item->price), 2) }}</span></h4>
                <a href="#" class="btn theme-orange-btn text-light px-4 py-2 rounded-pill fw-semibold">Checkout</a>
            </div>
        </div>
    </div>
    @endif
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
.rounded-4 {
    border-radius: 1rem !important;
}
.table th, .table td {
    vertical-align: middle !important;
}
</style>
@endpush
@endsection