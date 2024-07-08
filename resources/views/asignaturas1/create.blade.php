<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Asignatura</title>
</head>
<body>
    <form action="{{route('asignatura.store')}}" method="POST">
        @csrf
        <label for = "codigo">
            Codigo de Asignatura
            <br>
            <input type="text" name = "codigo" id="codigo" value="{{old('codigo')}}">
        </label>
        <br>

        <label for="nombre">
            Nombre de Asignatura
            <br>
            <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
        </label>
        <br>

        <label for = "horas">
            Horas de la Asignatura
            <br>
            <input type="number" name = "horas" id="horas" value="{{old('horas')}}">
        </label>
        <br>

        <button type="submit">Guardar</button>
    </form>
        </body>
</html>
