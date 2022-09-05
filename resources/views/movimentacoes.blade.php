<head>
    <link rel="stylesheet" href="{{ asset('css/caixa.css') }}"> 
<head>
<x-app-layout>
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Movimentações') }}
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
                                <th>Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movimentacoes as $movimentacao)
                            <tr>
                                <td>{{ $movimentacao->mesa_id }}</td>
                                <td>{{ round($movimentacao->preco,2) }}R$</td>
                                <td>{{ $movimentacao->agua }}</td>
                                <td>{{ $movimentacao->cerveja }}</td>
                                <td>{{ $movimentacao->refrigerante }}</td>
                                <td>{{ $movimentacao->PF }}</td>
                                <td>{{ $movimentacao->brigadeiro }}</td>
                                <td>{{ $movimentacao->created_at }}</td>
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