@extends('layouts.app')

@section('content')
<div class="container">    
                <div class="row" >
                    <div col s12">
                        <h3 class='center'  >Clasificacion de Palabras</h3>
                        <br>
                   
                            <ul class="collapsible">
                                @foreach($classifications as $clasificacion)
                                    <li>
                                        <div class="collapsible-header flow-text" ><i class="material-icons" >arrow_drop_down_circle</i>{{$clasificacion->name}}</div>
                                        <div class="collapsible-body">
                                        <table>
                                                <thead>
                                                <tr>
                                                    <th>Guarani</th>
                                                    <th>Español</th>
                                                </tr>
                                                </thead>
                                                <tbody>
           
                                        @foreach($classificationsTraduccion as $traduccion)
                                            @if ($clasificacion->id === $traduccion->classification_id)
                                                                <tr>
                                                
                                                                <td>{{$traduccion->guarani}}</td>
                                                                <td>{{$traduccion->translated}}</td>
                                                                </tr>      
                                            @endif
                                            
                                               
                                            
                                        @endforeach
                                        </tbody>
                                           </table>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                   
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