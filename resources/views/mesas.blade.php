<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mesas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container2">

                    @foreach($mesas as $mesa)
                    <div class="mesa">
                        
                        <form action="" method="get">
                            <p class="buttonedit">Mesa: {{ $mesa->id }}</p>
                        </form>
                        @if($mesa['status'] == 'disponivel') 
                        <form action="" method="get">
                            <button type="submit" class="buttonedit">Reservar</button>
                        </form>
                        @endif
                        @if($mesa['status'] == 'ocupada') 
                        <form action="" method="get">
                            <button type="submit" class="buttonedit">Adicionar Pedido</button>
                        </form>
                        @endif
                        @if($mesa['status'] == 'ocupada') 
                        <form action="" method="get">
                            <button type="submit" class="buttonedit">Vaga Ocupada</button>
                        </form>
                        @endif

                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
@import url('https://fonts.googleapis.com/css?family-Montserrat:600|Open+Sans:600&display-swap');

.container2{
    border-radius: 20px;
    text-align: center;
    display: flex;
    margin: 90px;
    flex-direction: column;
}

.buttonedit{
    style: none;
    color: black;
    font-family: 'Montserrat' , sans-serif;
    font-weight: 600;
    margin: 10px;
}

.mesa{
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 10px;
    border: 1px solid black;
    border-radius: 5px;
    display: flex;
    margin: 20px;
    background-color: #ccc;
}

</style>