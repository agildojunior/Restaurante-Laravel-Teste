<x-app-layout>
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Caixa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container2">
                    <table class="tabela">
                        <thead>
                            <tr>
                                <th>Mesa</th>
                                <th>Valor</th>
                                <th>Aguas</th>
                                <th>Cervejas</th>
                                <th>Refrigerantes</th>
                                <th>PF</th>
                                <th>Brigadeiros</th>
                                <th>Metodo1</th>
                                <th>Metodo2</th>
                                <th>Metodo3</th>
                                <th>Metodo4</th>
                                <th>Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($caixas as $caixa)
                            <tr>
                                <td>{{ $caixa->mesa_id }}</td>
                                <td>{{ round($caixa->preco,2) }}R$</td>
                                <td>{{ $caixa->agua }}</td>
                                <td>{{ $caixa->cerveja }}</td>
                                <td>{{ $caixa->refrigerante }}</td>
                                <td>{{ $caixa->PF }}</td>
                                <td>{{ $caixa->brigadeiro }}</td>
                                <td>{{ $caixa->metodo_pagamento_1 }} {{ round($caixa->valor_por_cliente,2) }}R$</td>
                                <td>{{ $caixa->metodo_pagamento_2 }}</td>
                                <td>{{ $caixa->metodo_pagamento_3 }}</td>
                                <td>{{ $caixa->metodo_pagamento_4 }}</td>
                                <td>{{ $caixa->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<style>

.container2{
    border-radius: 20px;
    text-align: center;
    display: flex;
    margin: 90px;
    flex-direction: column;
}

.tabela{
    border-collapse: collapse;
    max-height: 400px;
    overflow-x: hidden;
}

.tabela thead{
    background-color: #ddd;
    
}

.tabela thead tr th{
    color: black;
}

.tabela td{
    background-color: white;
}

.tabela th, .tabela td{
    padding: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    max-width: 150px;
    color: black;
}


.buttonedit{
    width: 60px;
    background-color: rgb(225, 225, 225);
    border: 1px solid #ccc;
    border-radius: 5px;
    color: black;
    padding: 5px;
    font-weight: bold;
}
.buttonedit:hover{
    background-color: rgb(200, 200, 200);
}
</style>