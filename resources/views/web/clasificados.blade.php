@extends('layouts.app')

@section('content')
<div class="container">
                     <div class="row" >
                        <div class="col s12">
                            <h3 class="center">Clasificacion </h3>
                        </div>
                    </div>
        <div class="collection">


                        @foreach($classifications as $clasificacion)
                        <a href="#" class="collection-item">{{$clasificacion->translated}}</a>
                    
                        @endforeach
            
        </div>
</div>
@endsection