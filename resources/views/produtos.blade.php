<head>
    <link rel="stylesheet" href="{{ asset('css/produtos.css') }}"> 
<head>
<x-app-layout>
<div class="fundo">
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="tituloNav">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container2">
                    <table class="table-fixed">
                        <thead class="theadtabelas">
                            <tr>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Produto</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">Preço</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-left padding5">...</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($events as $event)
                            <tr class="bg-white">
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $event->name }}</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">{{ $event->preco }}R$</td>
                                <td class="w-5 p-3 text-sm text-gray-700 border border-gray-200 padding5">
                                    <form class="formulario" action="{{ route('editarproduto', ['id' => $event['id']]) }}" method="get"> 
                                        <button type="submit" class="buttonedit">Editar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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