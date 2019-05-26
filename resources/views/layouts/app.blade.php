<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class='navbar-fixed'>
<nav  class="light-blue lighten-1" >
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo ">
      <img src="" style="height: 50px; padding-top: 10px;">
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      @guest
        <li><a href="/">Inicio</a></li>
        <li><a href="{{ route('Dictionary') }}">Diccionario</a></li>
        <li><a href="{{ route('Clasificacion') }}">Clasificacion</a></li>
        <li><a href="{{ route('sugerencias') }}">Sugerencias</a></li>
      </ul>
    </div>
  </nav>
  </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="/">Inicio</a></li>
        <li><a href="{{ route('Dictionary') }}">Diccionario</a></li>
        <li><a href="{{ route('Clasificacion') }}">Clasificacion</a></li>
        <li><a href="{{ route('sugerencias') }}">Sugerencias</a></li>
    </ul>
    @else
        <li class="active"><a href="/">Inicio</a></li>
        <li class="active" ><a href="{{ route('Dictionary') }}">Diccionario</a></li>
        <li class="active" ><a href="{{ route('Clasificacion') }}">Clasificacion</a></li>
        <li class="active" ><a href="{{ route('sugerencias') }}">Sugerencias</a></li>
        <li><a href="{{ route('admin') }}">{{ Auth::user()->name }}</a></li>
        
        <li> <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                 Cerrar Session

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
            </form></a>
    </li>
      </ul>
    </div>
 
  </div>

    <ul class="sidenav" id="mobile-demo">
        <li class="active"><a href="/">Inicio</a></li>
        <li class="active" ><a href="{{ route('Dictionary') }}">Diccionario</a></li>
        <li class="active" ><a href="{{ route('Clasificacion') }}">Clasificacion</a></li>
        <li class="active" ><a href="{{ route('sugerencias') }}">Sugerencias</a></li>
        <li><a href="{{ route('admin') }}">{{ Auth::user()->name }}</a></li>
        <li> <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                 Cerrar Session
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></a>
    </li></li>
    </ul>

 @endguest

        
       
        @yield('content')
       
        
<br>
<br>
<br>
      <footer class="page-footer light-blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Traductor Guarani</h5>
                <p class="grey-text text-lighten-4">Sitio dedicado a la ayuda de traduccion de palabra y oraciones en el idioma de guarani.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Informacion</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Ayuda</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Acerca del sitio</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright 
            <a class="grey-text text-lighten-4 right" href="#!">Mas Links</a>
            </div>
          </div>
        </footer>
</body>
@yield('script')
    
  