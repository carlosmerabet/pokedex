
@extends('templates.pokedex')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <table class="table table-sm" id="example1">
            <thead>
                <tr>
                <th class="text-center" width="10" scope="col">#</th>
                <th class="text-center" width="60" scope="col">Nome</th>
                <th width="30" scope="col"></th>
                </tr>
            </thead>  
            <tbody>      
            @foreach($pokedex as $pokemon)
                <tr>
                    <th class="text-center" scope="row">{{$pokemon['entry_number']}}</th>
                    <td >{{$pokemon['pokemon_species']['name']}}</td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{ url('detalhe/'.$pokemon['entry_number']) }}">Visualizar</a>
                    </td>

                </tr>


            @endforeach 
            </tbody>
        </table>
    </div>
</div>
@endsection

