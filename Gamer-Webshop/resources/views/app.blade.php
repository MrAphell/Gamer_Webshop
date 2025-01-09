<!DOCTYPE html>
<html lang="hu">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Gamer Webshop</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                    crossorigin="anonymous">
</head>

<body>
          <header>
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                              <div class="container-fluid">
                                        <a class="navbar-brand" href="#">Gamer Webshop</a>
                                        <div class="collapse navbar-collapse">
                                                  <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item">
                                                                      <a class="nav-link"
                                                                                href="{{ route('products.index') }}">Termékek</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                      <a class="nav-link"
                                                                                href="{{ route('categories.index') }}">Kategóriák</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                      <a class="nav-link"
                                                                                href="{{ route('orders.index') }}">Rendelések</a>
                                                            </li>
                                                  </ul>
                                        </div>
                    </nav>
          </header>

          <main>
                    @yield('content')
          </main>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
          </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
          </script>
</body>

</html>
