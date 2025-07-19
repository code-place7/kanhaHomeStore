@extends('layouts.main')

@push('title')
<title>Contact Us - KanhaStore</title>
@endpush

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4 p-4" style="background: linear-gradient(120deg, #ffffff 60%, #fff8ec 100%);">
                <div class="row align-items-center">
                    <!-- Left Side Image -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="https://media.istockphoto.com/id/1365436662/photo/successful-partnership.jpg?s=612x612&w=0&k=20&c=B1xspe9Q5WMsLc7Hc9clR8MWUL4bsK1MfUdDNVNR2Xg="
                             alt="Contact KanhaStore"
                             class="img-fluid rounded-4 shadow-sm"
                             style="max-height:360px; object-fit:cover;">
                    </div>
                    
                    <!-- Right Side Contact Form -->
                    <div class="col-md-6">
                        <h2 class="fw-bold mb-3" style="color:#ff6600;">Get In Touch</h2>
                        <p class="text-muted mb-4" style="font-size:1.05rem;">
                            Have a question, suggestion, or just want to say hello? Fill out the form below and we’ll get back to you shortly.
                        </p>

                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Your Name</label>
                                <input type="text" name="name" class="form-control rounded-pill px-3" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" class="form-control rounded-pill px-3" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Your Message</label>
                                <textarea name="message" rows="4" class="form-control rounded-4 px-3" required></textarea>
                            </div>
                            <button type="submit" class="btn theme-orange-btn text-white px-4 py-2 rounded-pill fw-semibold shadow-sm">
                                Send Message
                            </button>
                        </form>
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
    transition: 0.3s ease;
}
.theme-orange-btn:hover {
    background: linear-gradient(90deg, #e65c00 0%, #ffa940 100%);
    transform: scale(1.03);
}
.rounded-4 {
    border-radius: 1rem !important;
}
.form-control {
    font-size: 0.95rem;
    padding: 0.6rem 1rem;
}
</style>
@endpush
@endsection
