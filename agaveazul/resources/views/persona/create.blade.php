<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('persona.store')}}">
        {{ csrf_field () }}
        <label for="nombre" >Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"/>
        <label for="telefono" >Telefono:</label>
        <input type="text" name="telefono" id="telefono" placeholder="5555555555"/>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>