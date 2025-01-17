<!DOCTYPE html>
<html lang="hu" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gamer Webshop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex flex-column" style="height: 100vh;">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" style="font-weight: bold" href="{{ route('welcome') }}">Gamer Webshop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Termékek</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Kategóriák</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">Rendelések</a>
                  </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Bejelentkezés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Regisztráció</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.show') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Kijelentkezés</button>
                        </form>
                    </li>
                @endguest
          </div>
        </div>
      </nav>
  </header>

  <main class="flex-grow-1">
    @yield('content')
  </main>

  <hr class="my-4" style=" border-top: 2px solid #ffffff74; margin: 25px">

  <footer class="bg-dark text-white py-4 mt-auto">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <h5 class="mb-3">Gamer Webshop</h5>
          <p>&copy; 2025 Gamer Webshop. Minden jog fenntartva.</p>
        </div>

        <div class="col-md-4">
          <h5 class="mb-3">Gyors linkek</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('products.index') }}" class="text-white text-decoration-none">Termékek</a></li>
            <li><a href="{{ route('categories.index') }}" class="text-white text-decoration-none">Kategóriák</a></li>
            <li><a href="{{ route('orders.index') }}" class="text-white text-decoration-none">Rendelések</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5 class="mb-3">Kapcsolat</h5>
          <p>Email: <a href="mailto:info@gamerwebshop.com" class="text-white text-decoration-none">info@gamerwebshop.com</a></p>
          <p>Telefon: +36 1 234 5678</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
