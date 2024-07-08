<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pagina principal de Asignatura</h1>

    <a href="{{route('asignatura.create')}}">Añadir Asignatura</a>
    <ul> 
        @foreach ($asignatura as $asignatura)
        <li>
            <a href="{{route('asignatura.show', $asignatura->id)}}">{{$asignatura->nombre}}</a>
        </li>
        @endforeach
    </ul>
    {{asignatura->links() }}
</body>
</html>