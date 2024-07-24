<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mais Informações Eixos</title>
</head>
<body>
    <h1>Mais info Eixo</h1>
    <hr>
    <a href="{{route('eixo.index')}}">Voltar</a>
    <hr>
    <ul>
        <li>ID:{{$eixo->id}}</li>
        <li>Nome:{{$eixo->name}}</li>
        <li>Descrição:{{$eixo->description}}</li>
    </ul>
</body>
</html>