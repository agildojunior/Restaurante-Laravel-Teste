<head>
    <link rel="stylesheet" href="{{ asset('css/produtos.css') }}"> 
<head>
<x-app-layout>
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="container2">
                    <table class="tabela">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>...</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->preco }}</td>
                                <td>
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
</x-app-layout>

<style>

</style>