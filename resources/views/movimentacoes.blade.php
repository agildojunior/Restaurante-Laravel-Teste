<head>
    <link rel="stylesheet" href="{{ asset('css/caixa.css') }}"> 
<head>
<x-app-layout>
<div class="fundo">
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="tituloNav">
            {{ __('Movimentações') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container2">
                    <table class="table-fixed">
                        <thead class="theadtabelas">
                            <tr>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Mesa</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Valor</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Aguas</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Cervejas</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Refrigerantes</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">PF</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Brigadeiros</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($movimentacoes as $movimentacao)
                            <tr class="bg-white">
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->mesa_id }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ round($movimentacao->preco,2) }}R$</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->agua }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->cerveja }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->refrigerante }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->PF }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->brigadeiro }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $movimentacao->created_at }}</td>
                            </tr>
                             @endforeach
                             
                        </tbody>
                    </table>
                    <div class="border border-gray-200 padding5 theadtabelas">
                        {{$movimentacoes->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</x-app-layout>

<style>
.padding5{
    padding: 5px;
}
</style>