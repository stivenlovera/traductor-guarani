@extends('layouts.app')

@section('content')
<div class="container">
    <div class="section ">
                    <div class="row" >
                        <div class="col s12">
                            <h3 class='center '>Diccionario</h3>

                                    <table>
                                    <thead>
                                    <tr>
                                        <th>Guarani</th>
                                        <th>Español</th>
                                        <th>Definicion</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($translates as $traduccion)
                                        <tr>
                                                    <td>{{$traduccion->guarani}}</td>
                                                    <td>{{$traduccion->translated	}}</td>
                                                    <td>{{$traduccion->definition }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            {{$translates->render() }}
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