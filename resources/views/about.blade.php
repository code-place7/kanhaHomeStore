@extends('layouts.main')

@push('title')
<title>About Us - KanhaStore</title>
@endpush

@section('content')
<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4 p-4" style="background: linear-gradient(120deg, #ffffff 60%, #fff8ec 100%);">
                <div class="row align-items-center">
                    <!-- Image Section -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="https://media.istockphoto.com/id/1197952600/photo/latin-american-couple-evaluating-the-service-at-a-clothing-store-on-tablet-while-friendly.jpg?s=612x612&w=0&k=20&c=u-Xgge5-dJL3Le0voMNXPcmUktbKf-z_pQ9iVDt0wNg="
                             alt="About KanhaStore"
                             class="img-fluid rounded-4 shadow-sm"
                             style="max-height:350px; object-fit:cover;">
                    </div>
                    <!-- Text Content -->
                    <div class="col-md-6">
                        <h1 class="fw-bold mb-3" style="color:#ff6600; font-size:2.4rem;">Welcome to <span style="color:#6366f1;">KanhaStore</span></h1>
                        <p class="text-muted lead mb-4" style="font-size:1.1rem;">
                            Your one-stop destination for beautifully designed furniture and lifestyle products that transform your home.
                        </p>

                        <div class="mb-4">
                            <h5 class="fw-semibold mb-3 text-primary">Why Choose Us?</h5>
                            <div class="row">
                                @php
                                    $features = [
                                        ['icon' => 'fa-star', 'label' => 'Premium Quality'],
                                        ['icon' => 'fa-truck-fast', 'label' => 'Fast Delivery'],
                                        ['icon' => 'fa-palette', 'label' => 'Modern Designs'],
                                        ['icon' => 'fa-headset', 'label' => '24/7 Support']
                                    ];
                                @endphp
                                @foreach($features as $feature)
                                    <div class="col-6 mb-2">
                                        <span class="badge bg-gradient text-dark d-block px-3 py-2 rounded-pill shadow-sm">
                                            <i class="fa {{ $feature['icon'] }} me-2"></i>{{ $feature['label'] }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5 class="fw-semibold text-primary mb-2">Our Mission</h5>
                            <p class="text-muted" style="font-size:1.05rem;">
                                To redefine how people furnish their homes — combining style, comfort, and affordability.
                            </p>
                        </div>

                        <a href="{{ route('products') }}" class="btn theme-orange-btn text-white px-4 py-2 rounded-pill fw-semibold shadow-sm">
                            Start Shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('style')
<style>
.theme-orange-btn {
    background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%);
    border: none;
    transition: 0.3s;
}
.theme-orange-btn:hover {
    background: linear-gradient(90deg, #e65c00 0%, #ffa940 100%);
    transform: scale(1.03);
}
.bg-gradient {
    background: linear-gradient(90deg, #fff0e6 0%, #ffe0b2 100%) !important;
}
.rounded-4 {
    border-radius: 1rem !important;
}
.badge {
    font-size: 0.95rem;
    font-weight: 500;
    background-color: #f8f9fa;
    border: 1px solid #ffd699;
}
</style>
@endpush
@endsection
