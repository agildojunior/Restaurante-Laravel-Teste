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
                    <table class="table-fixed">
                        <thead class="bg-gray-100 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Mesa</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Valor</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Aguas</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Cervejas</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Refrigerantes</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">PF</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Brigadeiros</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Metodo1</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Metodo2</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Metodo3</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Metodo4</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($caixas as $caixa)
                            <tr class="bg-white">
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->mesa_id }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ round($caixa->preco,2) }}R$</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->agua }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->cerveja }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->refrigerante }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->PF }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->brigadeiro }}</td>
                                @if( $caixa->valor_por_cliente > 0)
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->metodo_pagamento_1 }} {{ round($caixa->valor_por_cliente,2) }}R$</td>
                                @else
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5"></td>
                                @endif
                                @if( $caixa->valor_por_cliente2 > 0)
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->metodo_pagamento_2 }} {{ round($caixa->valor_por_cliente2,2) }}R$</td>
                                @else
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5"></td>
                                @endif
                                @if( $caixa->valor_por_cliente3 > 0)
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->metodo_pagamento_3 }} {{ round($caixa->valor_por_cliente3,2) }}R$</td>
                                @else
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5"></td>
                                @endif
                                @if( $caixa->valor_por_cliente4 > 0)
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->metodo_pagamento_4 }} {{ round($caixa->valor_por_cliente4,2) }}R$</td>
                                @else
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5"></td>
                                @endif
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $caixa->created_at }}</td>
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
.padding5{
    padding: 5px;
}
</style>