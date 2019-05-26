@extends('layouts.app')

@section('content')
<div class="container">
<br>
 <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="{{ asset('img/office.jpg') }}" >
      </div>
      <a href="#user"><img class="circle" src="{{ asset('img/no-user.png') }}"></a>
      <a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
      <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>Mi cuenta</a></li>
    <li><a href="">Sugerencias</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Gestionar</a></li>
    <li><a class="waves-effect" href="#!">Diccionario</a></li>
    <li><a class="waves-effect" href="#!">Clasificaciones</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger waves-effect waves-light btn">Lista de Opciones</a>
  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('js/jquerys.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script>
    
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>
  

@endsection