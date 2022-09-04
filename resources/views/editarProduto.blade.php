<x-app-layout>
    <!-- tailwind -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Produto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                @csrf
                <form class="formulario" action="{{ route('editarproduto2', ['id' => $event['id']]) }}"  method="get"> 
                    <h1>Produto: {{$event['name']}}</h1>
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
</x-app-layout>

<style>
@import url('https://fonts.googleapis.com/css?family-Montserrat:600|Open+Sans:600&display-swap');


.cadastro-div{
    color: white;
    min-height: 500px;
    max-width: 600px;
    background-color: aliceblue;
    /* font-family: 'Montserrat' , sans-serif; */
    align-items: center;
    text-align: left;
    justify-content: center;
    border:1px solid black;
    background-color: #1b1b1b;
}
h1{
    font-size: 40px;
}

.formulario{
    padding: 20px 50px 20px 20px;
    display: block;
}

.form-group input{
    display: block;
    width: 290px;
    padding: 10px;
    margin-bottom: 1em;
    font: 1em 'Montserrat' , sans-serif;
    border: 1px solid black;
    border-radius: 5px;
}

.form-group label{
    text-align: left;
}

.form-group button{
    background-color: white;
    border: 1px solid black;
    border-radius: 5px;
    color: black;
    padding: 15px;
    /* font-family: 'Montserrat' , sans-serif; */
}
</style>