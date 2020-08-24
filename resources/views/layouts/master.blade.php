<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="utf-8">
    <title>Prodaja</title>
    @if (Request::path() != 'tables')
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @endif
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @yield('headjs')
  </head>
  <body>
    
    @if(Auth::check())
    <nav class="navbar navbar-expand-xl navbar-light bg-light fixed" style="z-index: 10" id="navbar">
      <button onclick="menuOpen()" class="navbar-toggler {{Request::path() == 'tables' ? 'navbar-toggler-table' : ''}}" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="/"><i class="fas fa-user"></i> Kupac</a>
          <a class="nav-item nav-link" href="/tables"><i class="fas fa-screwdriver"></i> Proizvodi</a>
          <a class="nav-item nav-link" href="/cart"><i class="fas fa-shopping-cart"></i> Korpa</a>
          @if(Auth::user()->id == 1)
          <a class="nav-item nav-link" href="/user"><i class="fas fa-users-cog"></i> Korisnik</a>
          @endif
          <a class="nav-item nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Odjava</a>
        </div>
      </div>
    </nav>
    
    @if (Request::path() != 'tables')
    <div id="menu" class="menu-overlay">

      <a href="javascript:void(0)" class="closebtn" onclick="menuClose()">&times;</a>
    
      <div class="menu-overlay-content">
        <a href="/"><i class="fas fa-user"></i> Kupac</a>
          <a href="/tables"><i class="fas fa-screwdriver"></i> Proizvodi</a>
          <a href="/cart"><i class="fas fa-shopping-cart"></i> Korpa</a>
          @if(Auth::user()->id == 1)
          <a href="/user"><i class="fas fa-users-cog"></i> Korisnik</a>
          @endif
          <a href="/logout"><i class="fas fa-sign-out-alt"></i> Odjava</a>
      </div>
    
    </div>
    @else 
    <div id="menu" class="menu-overlay overlay-tables">

      <a href="javascript:void(0)" class="closebtn" onclick="menuClose()">&times;</a>
    
      <div class="menu-overlay-content">
        <a href="/"><i class="fas fa-user"></i> Kupac</a>
          <a href="/tables"><i class="fas fa-screwdriver"></i> Proizvodi</a>
          <a href="/cart"><i class="fas fa-shopping-cart"></i> Korpa</a>
          @if(Auth::user()->id == 1)
          <a href="/user"><i class="fas fa-users-cog"></i> Korisnik</a>
          @endif
          <a href="/logout"><i class="fas fa-sign-out-alt"></i> Odjava</a>
      </div>
    
    </div>
    @endif

    @endif
    
    <div style="margin-top:100px;">
      @yield('content')
    </div>
    
    @yield('javascript')
    <script>
      function menuOpen(){
        document.getElementById("menu").style.width = "100%";
      }

      function menuClose(){
        document.getElementById("menu").style.width = "0%";
      }
    </script>
  </body>
</html>