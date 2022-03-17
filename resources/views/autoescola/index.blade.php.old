<html>
    <head>
        <title>
            Auto escola do cleitinho
        </title>
    </head>
    <body>
        <form method="POST" action="/autoescola">
            <div>
                <label>Marca:</label>
                <select name="marca">
                    <option value=""></option>
                    <option value="Fiat"
                        {{ $carro -> marca == "Fiat" ? "selected" : "" }}
                    >Fiat</option>
                    <option value="Volkswagen" 
                        {{ $carro -> marca == "Volkswagen" ? "selected" : ""}}
                    >Volkswagen</option>
                    <option value="Renault"
                        {{ $carro -> marca == "Renault" ? "selected" : ""}}
                    >Renault</option>
                    <option value="Hyundai"
                        {{ $carro -> marca == "Hyundai" ? "selected" : ""}}
                    >Hyundai</option>
                    <option value="Honda"
                        {{ $carro -> marca == "Honda" ? "selected" : ""}}
                    >Honda</option>
                    <option value="Toyota"
                        {{ $carro -> marca == "Toyota" ? "selected" : ""}}
                    >Toyota</option>
                    <option value="Mercedes Benz"
                        {{ $carro -> marca == "Mercedes Benz" ? "selected" : ""}}
                    >Mercedes Benz</option>
                </select>
            </div>
            <div>
                <label>Modelo: </label>
                <input type="text" name="modelo" value="{{ $carro ->modelo }}">
            </div>
            <div>
                <label>Placa: </label>
                <input type="text" name="placa" value="{{ $carro ->placa }}">
            </div>
            <div>
                <label>Cor: </label>
                <input type="text" name="cor" value="{{ $carro ->cor}}">
            </div>
            <div>
                <label>Ano: </label>
                <input type="text" name="ano" value="{{ $carro -> ano}}">
            </div>
            <div>
                <!-- cria uma chave (Cross-Site Request Forgery) evitando ataque que 
                insere requisições em sessões que já estejam abertas pelo usuário -->
                @csrf
                <input type="hidden" name="id" value="{{ $carro -> id }}">
                <button type="submit">Salvar</button>
            </div>
            <table border="7">
                <thead>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Cor</th>
                    <th>Ano</th>
                    <th>Editar</th>
                    <th>Escluir</th>
                </thead>
                <tbody>
                    <!-- Aqui foi criado um laço para se repetir para cada registro da variavél carro,
                    ele cria 1 linha<tr> para cada repetição e varias colunas<td> --> 
                    @foreach ($carros as $carro) 
                        <tr>
                            <td>{{ $carro -> marca }}</td>
                            <td>{{ $carro -> modelo }}</td>
                            <td>{{ $carro -> placa }}</td>
                            <td>{{ $carro -> cor }}</td>
                            <td>{{ $carro -> ano }}</td>
                            <td><a href="/autoescola/editar/{{$carro->id}}">Editar</a></td>
                            <td><a href="/autoescola/excluir/{{$carro->id}}">Excluir</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
         </form>
    </body>
</html>