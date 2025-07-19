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
  </head>
  <body>
    <nav class="navbar navbar-light bg-white shadow-sm py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="font-family: 'Dancing Script', cursive; font-size: 2rem; color: #ff6600; letter-spacing: 2px;">
          <span style="background: linear-gradient(90deg, #ff6600 0%, #ffb347 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            kanhaStore
          </span>
        </a>
        <div>
          <a href="{{ url('login') }}" class="btn btn-outline-primary me-2"><i class="fa-solid fa-user"></i> Login</a>
          <a href="{{ url('register') }}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Sign Up</a>
        </div>
      </div>
    </nav>
  </body>
</html>