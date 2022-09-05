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

.container2{
    border-radius: 20px;
    text-align: center;
    display: flex;
    margin: 20px;
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