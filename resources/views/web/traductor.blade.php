@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section center">
                    <div class="row" >
                        <div class="col s12">
                            <h3>Traductor Guarani - Español</h3>
                        </div>
                    </div>
    

                    <div class="row">
                        <div class="col s12 m6">
                            <h5>Traducir</h5>
                            <div class="row">
                                <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        {!! Form::open(['route'=>['traductor'],'method'=>'POST']) !!}   
                                        {!! Form::textarea('traducir', null, ['id' => 'textarea1','class'=>'materialize-textarea']) !!}    
                                        <!--textarea id="textarea1" class="materialize-textarea"></textarea-->
                                        {!! Form::close() !!}
                                        <label for="textarea1">Ingrese texto</label>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <h5>Traducido</h5>
                            <div class="row">
                                <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        
                                        <textarea disabled value="I am not editable" id="disabled" class="materialize-textarea"></textarea>
                                    
                                        <label for="textarea1"></label>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!--div id="alert" class="alert alert-info red">alerta</div-->
                    <div class="row">
                    <!--button id="myDiv" class="waves-effect waves-light btn">Traducir</button-->
                    </div>
    </div>
    </div>
@endsection


@section('script')
<script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
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
