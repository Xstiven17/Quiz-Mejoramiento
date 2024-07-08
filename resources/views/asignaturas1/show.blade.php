<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Asignaturas</title>
</head>
<body>
    <h1>Detalles de la asignatura</h1>
    <ul>
        <li><strong>Codigo de Asignatura</strong> {{$asignatura->codigo}} </li>
        <li><strong>Nombre de Asignatura</strong>{{$asignatura->nombre}} </li>
        <li><strong>Horas de Asignatura</strong>{{$asignatura->horas}} </li>
    </ul>

    <form action = "{{ route('asignatura.destroy' ,$asignatura->id)}}" method = "POST">
        @csrf
        @method('DELETE')
        <br>
        <a href="{{route(asignatura.index)}}">Ir al inicio</a>

        <br>
        <br>

        <a href="{{route('asignatura.edit', $asignatura->id)}}">Editar</a>
        
        <br>
        <br>
        <button type="submit">Borrar</button>
</body>
</html>