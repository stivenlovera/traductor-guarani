@extends('layouts.app')

@section('content')
<div class="container">
  <h3 class='center'  >Dejanos una Sugerencia :)</h3>
    


  <div class="col s12 m8 offset-m2 l6 offset-l3">
       
        
          <div id="sugerencias" class="card-panel grey lighten-5 z-depth-1">
              <span class="black-text">
               Este mensaje sera leido por nuestros administradores :v
              </span>
          
            <div class="row valign-wrapper">
            
              <form class="col s12">
                  <div class="row">
                      <div class="input-field col s12">
                      {!! Form::open(['route'=>['traductor'],'method'=>'POST']) !!}   
                        {!! Form::textarea('traducir', null, ['id' => 'text','class'=>'materialize-textarea']) !!}    
                      {!! Form::close() !!}
                      <label for="textarea1">Escribe aqui tu texto</label>
                      </div>
                  </div>
              </form>
              
            </div>
            <input id="enviar" type="submit" class="btn btn-dark btn-lg" value="Enviar">  
          </div>
       <br>
       <br>
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
    $('.collapsible').collapsible();
    var sugerencia=$('#text').serialize();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     $("#enviar").click(function(e){
     e.preventDefault();

     document.getElementById("sugerencias").innerHTML = "<h5>Gracias por su sugerencia..<h5>";
      var dataForm = $("#formAgregarEvento").serialize();
      $.post("/enviando",sugerencia,function(result){
        
      
    }).fail(function(){
  
    });
  });
});

 
  </script>
  

@endsection