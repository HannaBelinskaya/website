<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
	  @foreach($v_categories as $cat)
        <a href="{{asset('category/'.$cat->id)}}" class="list-group-item list-group-item-action bg-light"> {{$cat->name}}</a>
        @endforeach
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
	  <main class='ру-4'>
       @yield('content')
        </main>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
	 <ul class="navbar-nav ml-auto">
@guest
                         <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img id="imgNavSel" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="..." class="img-thumbnail icon-small">&nbsp;&nbsp;
                            <span id="lanNavSel">Rus</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu mumu" role="menu">
                            <li><a id="navFra" href="https://tattooscalculator.com/?lang=Fra" class="language">
                                    <img id="imgNavFra" src="https://tattooscalculator.com/img/flag/Fra_40.jpg" alt="France" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavFra">Française</span>&nbsp;
                                </a></li>
                            <li><a id="navEng" href="https://tattooscalculator.com/?lang=Eng" class="language">
                                    <img id="imgNavEng" src="https://tattooscalculator.com/img/flag/Eng_40.jpg" alt="English" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavEng">English</span>&nbsp;
                                </a></li>
                            <li><a id="navRus" href="https://tattooscalculator.com/?lang=Rus" class="language">
                                    <img id="imgNavRus" src="https://tattooscalculator.com/img/flag/Rus_40.jpg" alt="Russia" class="img-thumbnail icon-small">&nbsp;
                                    <span id="lanNavRus">Русский</span>&nbsp;
                                </a></li>
                        </ul>
                    </li>
						
						</ul>
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
