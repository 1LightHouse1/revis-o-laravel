<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Eixo</title>
</head>
<body>
    <h1>Alterar Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <form action="{{route('eixo.update', $eixo->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$eixo->name}}"><br>
        <textarea name="description" cols="40" rows="5">{{$eixo->description}}</textarea><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>