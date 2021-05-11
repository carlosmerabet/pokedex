
@extends('templates.pokedex')



@section('content')

<div class="row">
    <div class="col-sm-12">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Pokedex</a>
                </li>
                <li class="breadcrumb-item active">{{$pokemon['forms'][0]['name']}}</li>
            </ol>
        </nav>
    </div>

</div>

<div class="row">

    <div class="col-sm-12">

        <div class="card">
            <div class="card-header">
                {{$pokemon['forms'][0]['name']}}
            </div>            
            <div class="card-body">
                <div class="row">
                    <div class="col-3">height:</div>
                    <div class="col-9">{{$pokemon['height']}}</div>
                </div>
                <div class="row">
                    <div class="col-3">weight:</div>
                    <div class="col-9">{{$pokemon['weight']}}</div>
                </div>                

                <div class="row">
                    <div class="col-3">base_experience:</div>
                    <div class="col-9">{{$pokemon['base_experience']}}</div>
                </div>

                <div class="row">
                    <div class="col-3">Tipo(s):</div>
                    <div class="col-9">
                        <?$cont=0;?>
                        @foreach($pokemon['types'] as $t)
                            @if($cont==0)
                                {{$t['type']['name']}}
                            @else
                                {{', '.$t['type']['name']}}
                            @endif
                            <?$cont++;?>
                        @endforeach
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12 text-center">
                        Imagens<br>
                        @foreach($pokemon['fotos'] as $f)
                            @if($f !='')
                            <img src="{{$f}}" alt="">
                            @endif
                        @endforeach 
                    </div>

                </div>
               

            </div>
        </div>    

    </div>

</div>



@endsection