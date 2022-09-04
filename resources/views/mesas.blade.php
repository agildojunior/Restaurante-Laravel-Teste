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
                            <p class="textomesa">Mesa: {{ $mesa->id }}</p>
                        </form>
                        @if($mesa['status'] == 'disponivel') 
                        
                            <label for="modalmesa{{ $mesa->id }}" class="buttonmesa">Reservar</label>
                            <input type="checkbox" id="modalmesa{{ $mesa->id }}" class="checkboxModal">
                            <div class="modalmesadiv">
                                <label for="modalmesa{{ $mesa->id }}" class="fecharModal">X</label>
                                <div class="conteudomodal">
                                    <div class="form-group">
                                        
                                        <h1 class="h1solicitar">Mesa: {{$mesa['id']}}</h1>
                                        <p>Quantidade de pessoas:</p>
                                    <form action="{{ route('reservarMesa', ['id' => $mesa['id']]) }}" method="get">
                                        <select name="total" id="total">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        <div class="form-group">
                                            <button type="submit" class="">Reservar</button>
                                        </div>
                                    </form>
                                    </div>
                                    

                                </div>
                            </div>

                        @endif

                        @if($mesa['status'] == 'ocupada') 
                        
                            <label for="modalmesa{{ $mesa->id }}" class="buttonmesa">Adicionar Pedido</label>
                            <input type="checkbox" id="modalmesa{{ $mesa->id }}" class="checkboxModal">
                            <div class="modalmesadiv">
                                <label for="modalmesa{{ $mesa->id }}" class="fecharModal">X</label>
                                <div class="conteudomodal">
                                    <div class="form-group">
                                        
                                        <h1 class="h1pedidos">Mesa: {{$mesa['id']}}</h1>
                                        <p>Quantidade atual de</p>
                                        <p>Aguas: {{$mesa['qtdd_produto_1']}}</p>
                                        <p>Cervejas: {{$mesa['qtdd_produto_2']}}</p>
                                        <p>Refrigerantes: {{$mesa['qtdd_produto_3']}}</p>
                                        <p>PF: {{$mesa['qtdd_produto_4']}}</p>
                                        <p>Brigadeiro: {{$mesa['qtdd_produto_5']}}</p>
                                        <br/>
                                        <form action="{{ route('adicionarPedidos', ['id' => $mesa['id']]) }}" method="get">
                                            <div class="produto">
                                                <label>Adicionar: <label>
                                                <input type="text" value="0" placeholder="..." name="aguas" required>
                                                <label>Aguas<label>
                                            </div>
                                            <div class="produto">
                                                <label>Adicionar: <label>
                                                <input type="text" value="0" placeholder="..." name="cervejas" required>
                                                <label>Cervejas<label>
                                            </div>
                                            <div class="produto">
                                                <label>Adicionar: <label>
                                                <input type="text" value="0" placeholder="..." name="refrigerantes" required>
                                                <label>Refrigerantes<label>
                                            </div>
                                            <div class="produto">
                                                <label>Adicionar: <label>
                                                <input type="text" value="0" placeholder="..." name="pf" required>
                                                <label>PF<label>
                                            </div>
                                            <div class="produto">
                                                <label>Adicionar: <label>
                                                <input type="text" value="0" placeholder="..." name="brigadeiro" required>
                                                <label>Brigadeiro<label>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="">Adicionar Pedidos</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endif

                        @if($mesa['status'] == 'ocupada') 
                        <label for="modalmesaconta{{ $mesa->id }}" class="buttonmesa">Solicitar Conta</label>
                            <input type="checkbox" id="modalmesaconta{{ $mesa->id }}" class="checkboxModal">
                            <div class="modalmesadiv">
                                <label for="modalmesaconta{{ $mesa->id }}" class="fecharModal">X</label>
                                <div class="conteudomodal">
                                    <div class="form-group">
                                        
                                        <h1 class="h1pedidos">Mesa: {{$mesa['id']}}</h1>
                                        <form action="{{ route('adicionarAoCaixa', ['id' => $mesa['id']]) }}" method="get">
                                            <div class="clientePagamento">
                                                </br>
                                                <p>Conta da mesa: {{ ($mesa['qtdd_produto_1']*$precos['produto1'])+($mesa['qtdd_produto_2']*$precos['produto2'])+($mesa['qtdd_produto_3']*$precos['produto3'])+($mesa['qtdd_produto_4']*$precos['produto4'])+($mesa['qtdd_produto_5']*$precos['produto5']) }} R$</p>
                                                <p>Valor dividido pelas pessoas da mesa.</p>
                                                @for($i = 1; $i <= $mesa['qtdd_Pessoas'] ; $i++)
                                                <div>
                                                    <label>Pessoa {{$i}} - Metodo de pagamento: <label>
                                                    <select name="metodo{{$i}}" id="metodo{{$i}}">
                                                        <option value="dinheiro">dinheiro</option>
                                                        <option value="debito">debito</option>
                                                        <option value="credito">credito</option>
                                                        <option value="pix">pix</option>
                                                    </select>
                                                    <label>Valor da conta: {{ (($mesa['qtdd_produto_1']*$precos['produto1'])+($mesa['qtdd_produto_2']*$precos['produto2'])+($mesa['qtdd_produto_3']*$precos['produto3'])+($mesa['qtdd_produto_4']*$precos['produto4'])+($mesa['qtdd_produto_5']*$precos['produto5']))/$mesa['qtdd_Pessoas'] }} R$<label>
                                                </div>
                                                @endfor
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <button type="submit" class="">Confirmar</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    @endforeach

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
    margin: 90px;
    flex-direction: column;
}
.textomesa{
    style: none;
    color: black;
    font-weight: 600;
    margin: 10px;
}
.buttonmesa{
    style: none;
    color: black;
    font-weight: 600;
    margin: 10px;
}
.buttonmesa:hover{
    color: #4169e1;
    cursor: pointer;
}
.mesa{
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    display: flex;
    margin: 20px;
    background-color: #ddd;
}
.checkboxModal{
    display: none;
}
/* ---- Mesa Pedir Conta ---- */
#modalmesaconta1:checked + .modalmesadiv{
    display: block;
}
#modalmesaconta2:checked + .modalmesadiv{
    display: block;
}
#modalmesaconta3:checked + .modalmesadiv{
    display: block;
}
#modalmesaconta4:checked + .modalmesadiv{
    display: block;
}
#modalmesaconta5:checked + .modalmesadiv{
    display: block;
}
/* -------------------------- */
/* ---- Mesa Normal ---- */
#modalmesa1:checked + .modalmesadiv{
    display: block;
}
#modalmesa2:checked + .modalmesadiv{
    display: block;
}
#modalmesa3:checked + .modalmesadiv{
    display: block;
}
#modalmesa4:checked + .modalmesadiv{
    display: block;
}
#modalmesa5:checked + .modalmesadiv{
    display: block;
}
/* -------------------------- */
.clientePagamento{
    display: block;
}
.modalmesadiv{
    display: none;
    position: fixed;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    left: 0px;
    top: 0px;
}
.fecharModal{
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 30px;
}
.fecharModal:hover{
    cursor: pointer;
    color: #4169e1;
}
.conteudomodal{
    display: block;
    margin: 0 auto;
    padding: 20px;
    width: 75%;
    height: 100%;
    border: 1px solid lightgray;
    background-color: white;
}
.form-group .h1solicitar{
    margin-top: 25vh;
    font-size: 40px; 
}
.h1pedidos{
    font-size: 40px; 
    border-bottom: 1px solid #ccc;
}
.form-group h1{
    font-size: 40px; 
}
.form-group p{
    font-size: 20px;
}
.form-group input{
    width: 290px;
    padding: 10px;
    margin-bottom: 30px;
    font: 1em 'Montserrat' , sans-serif;
    border: 1px solid black;
    border-radius: 5px;
}
.form-group select{
    width: 100px;
    background-color: white;
    border: 1px solid black;
    border-radius: 5px;
    color: black;
    padding: 10px;
    margin: 15px;
}
.form-group button{
    width: 200px;
    background-color: white;
    border: 1px solid black;
    border-radius: 5px;
    color: black;
    padding: 15px;
    margin: 20px;
}
.form-group button:hover{
    background-color:#ccc;
}
.produto{
    border-top: 1px solid #ccc;
    margin: 1px;
    padding: 3px;
}
.produto label{
    font-size: 20px;
    margin: 1px;
}
.produto input{
    width: 60px;
    margin: 1px;
}
</style>