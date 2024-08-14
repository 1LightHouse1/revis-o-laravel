<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eixos</title>
</head>
<body>
    <h1>Tabela de Eixos</h1>
    <hr>
    @can('create', App\Models\Eixo::class)
    <a href="{{route('eixo.create')}}">Cadastrar</a>
    @endcan
    <hr>
    <table>
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{route('eixo.show', $item->id)}}">Mais Info</a>
                    </td>
                    <td>
                        @can('edit', App\Models\Eixo::class)
                        <a href="{{route('eixo.edit', $item->id)}}">Alterar</a>
                        @endcan
                    </td>
                    <td>
                        <a href="{{asset('storage'."/".$item->url)}}" target="_blank">arquivo</a>
                    </td>
                    <td>
                        @can('destroy', App\Models\Eixo::class)
                        <form action="{{route('eixo.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remover">
                        </form>
                        @endcan
                    </td>
                    <a href="{{route('report')}}" target="_blank">Relátório</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>