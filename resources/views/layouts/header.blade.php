<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{asset ('build/assets/css/style.css')}}" rel="stylesheet">
    <style>
      .modern-navbar {
        background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%);
        box-shadow: 0 2px 12px rgba(59,130,246,0.08);
      }
      .modern-navbar .navbar-brand span {
        font-family: 'Dancing Script', cursive;
        font-size: 2.2rem;
        letter-spacing: 2px;
        background: linear-gradient(90deg, #fff 0%, #ffe5b4 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .modern-navbar .nav-link {
        color: #fff !important;
        font-weight: 500;
        margin-right: 18px;
        transition: color 0.2s;
      }
      .modern-navbar .nav-link:hover {
        color: #222 !important;
        text-decoration: underline;
      }
      .modern-navbar .btn {
        font-weight: 500;
        border-radius: 999px;
      }
      .modern-navbar .form-control {
        border-radius: 999px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg modern-navbar py-2">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{url('/')}}">
          <span>KanhaStore</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('products') }}"><i class="fa-solid fa-box"></i> Products</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}"><i class="fa-solid fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}"><i class="fa-solid fa-phone"></i> Contact</a>
            </li>
          </ul>
          <form class="d-flex me-3" role="search">
            <div class="input-group">
              <input class="form-control form-control-sm" style="width:220px;" type="search" placeholder="Search products..." aria-label="Search">
              <button class="btn btn-light text-secondary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
          <a href="{{route('cart.show')}}" class="btn btn-success btn-sm text-light ms-1 px-3 py-2"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
          <a href="{{ route('signout') }}" class="btn btn-danger btn-sm text-light ms-1 px-3 py-2"><i class="fa-solid fa-user"></i> Signout</a>
        </div>
      </div>
    </nav>

    
  