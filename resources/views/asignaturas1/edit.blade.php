<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Asignatura</title>
</head>
<body>
    <h1>Editar Asignatura</h1>
    <form action="{{route('asignatura.update', $asignatura)}}" method="POST">
        @csrf
        @method(PUT)

        <label for="codigo">
            Codigo Asignatura
            <br>
            <input type="text" id="codigo" name="codigo" value="{{$asignatura->codigo}}" required>
        </label>
        <br>

        <label for="nombre">
            Nombre Asignatura
            <br>
            <input type="text" id="nombre" name="nombre" value="{{$asignatura->nombre}}" required>
        </label>
        <br>

        <label for="horas">
            Horas Asignatura
            <br>
            <input type="number" id="horas" name="horas" value="{{$asignatura->horas}}" required>
        </label>
        <br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>