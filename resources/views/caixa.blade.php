<head>
    <link rel="stylesheet" href="{{ asset('css/caixa.css') }}"> 
<head>
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
                                <td>{{ $caixa->metodo_pagamento_2 }} {{ round($caixa->valor_por_cliente2,2) }}R$</td>
                                <td>{{ $caixa->metodo_pagamento_3 }} {{ round($caixa->valor_por_cliente3,2) }}R$</td>
                                <td>{{ $caixa->metodo_pagamento_4 }} {{ round($caixa->valor_por_cliente4,2) }}R$</td>
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

</style> 