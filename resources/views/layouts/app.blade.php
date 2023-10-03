<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>4Shop van Tije van Roekel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/narrow-jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Comic+Neue:wght@700&family=Libre+Baskerville&family=Noto+Serif+Sinhala:wgh t@300&display=swap" rel="stylesheet">
    <link rel="icon" href="/img/4S-Logo.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/4S-Logo.ico" type="image/x-icon">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="container">
      <header class="header d-flex justify-content-between align-items-center">
        <img src="{{ url('img/4S-Logo-Compact-Small.png') }}" alt="" width="64">
        <h3 class="text-muted"><a href="{{ route('home') }}" class="no-link">4Shop</a></h3>
        <a href="{{ route('cart') }}"><img class="cart" src="{{ url('img/cart.png') }}" alt=""></a>
      </header>

      <main role="main">
        @if (session('status'))
            <div class="alert alert-{{ session('status')[0] }}">
                {!! session('status')[1] !!}
            </div>
        @endif
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        @yield('content')
      </main>

      <footer class="footer">
        <p>Scouting merch winkel van 4S. <strong>Adres: Terheideseweg 350. Mail: scout4s@gmail.com</p>
      </footer>

    </div>
</body>
</html>
