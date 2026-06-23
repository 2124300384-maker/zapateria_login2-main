@extends('Plantilla.plantilla')

@section('content')

<h1>Vista Productos</h1>

<table border="1">
    <tr>
        @foreach($productos->first()->getAttributes() as $campo => $valor)
            <th>{{ $campo }}</th>
        @endforeach
    </tr>

    @foreach($productos as $producto)
        <tr>
            @foreach($producto->getAttributes() as $valor)
                <td>{{ $valor }}</td>
            @endforeach
        </tr>
    @endforeach

</table>

@endsection