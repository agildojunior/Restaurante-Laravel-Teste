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
@import url('https://fonts.googleapis.com/css?family-Montserrat:600|Open+Sans:600&display-swap');

.container2{
    /* background-color: rgb(255, 255, 255); */
    border-radius: 20px;
    text-align: center;
    display: flex;
    margin: 90px;
    flex-direction: column;
    /* box-shadow: 0 0 2em black; */
}

.tabela{
    border-collapse: collapse;
    max-height: 400px;
    overflow-x: hidden;
}

.tabela thead{
    background-color: #ccc;
    
}

.tabela thead tr th{
    color: black;
}

.tabela td{
    background-color: white;
}

.tabela th, .tabela td{
    font-family: 'Montserrat' , sans-serif;
    padding: 15px;
    box-sizing: border-box;
    border: 1px solid Gray;
    max-width: 150px;
    color: black;
}


.buttonedit{
    width: 60px;
    background-color: rgb(225, 225, 225);
    border: 1px solid black;
    border-radius: 5px;
    color: black;
    padding: 5px;
    font-family: 'Montserrat' , sans-serif;
    font-weight: bold;
}
.buttonedit:hover{
    background-color: rgb(200, 200, 200);
}
</style>