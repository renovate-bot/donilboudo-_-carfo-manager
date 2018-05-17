<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gestion du programme de paie des pensions</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head> 
    <body style="margin-bottom: 100px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">CARFO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        <li class="nav-item nav-link active {{ (Request::is('/') ? 'active' : '') }}">
                            <a href="{{ url('') }}"><i class="fa fa-home"></i>Acceuil</a>
                        </li>
                        <li class="nav-item nav-link active {{ (Request::is('banktranfers') ? 'active' : '') }}">
                            <a href="{{ url('banktransfers') }}">Transfert banquaire</a>
                        </li>
                        <li class="nav-item nav-link active {{ (Request::is('cashpayments') ? 'active' : '') }}">
                            <a href="{{ url('cashpayments') }}">Paiement à la caisse</a>
                        </li>
                        {{--  <li class="nav-item nav-link active {{ (Request::is('categories') ? 'active' : '') }}">
                            <a href="{{ url('categories') }}">@lang('categories.title')</a>
                        </li>
                        <li class="nav-item nav-link active {{ (Request::is('organizers') ? 'active' : '') }}">
                            <a href="{{ url('organizers') }}">@lang('organizers.title')</a>
                        </li>  --}}
                </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="page-header">
                @yield('header')
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @yield('content')
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>
</html>