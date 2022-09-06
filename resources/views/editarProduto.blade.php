<head>
    <link rel="stylesheet" href="{{ asset('css/editarproduto.css') }}"> 
<head>
<x-app-layout>
<div class="fundo">
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="tituloNav">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                @csrf
                <form class="formulario" action="{{ route('editarproduto2', ['id' => $event['id']]) }}" method="get"> 
                    <h1 class="h1titulo">Produto: {{$event['name']}}</h1>
                    <div class="form-group">
                        <label>Novo preço:</label>
                        <input type="text" value="" placeholder="{{$event['preco']}}" name="preco" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="">Editar</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
</div>
</x-app-layout>

<style>

</style>