<head>
    <link rel="stylesheet" href="{{ asset('css/mesas.css') }}"> 
<head>
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
                        <p class="textomesa">Mesa: {{ $mesa->id }}</p>
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
                                        <hr class="hrdividir"/>
                                        <p>Quantidade atual de</p>
                                        <div class="divcenter">
                                            <div class="listaDePedidos">
                                                <p>Aguas: {{$mesa['qtdd_produto_1']}}</p>
                                                <p>Cervejas: {{$mesa['qtdd_produto_2']}}</p>
                                                <p>Refrigerantes: {{$mesa['qtdd_produto_3']}}</p>
                                                <p>PF: {{$mesa['qtdd_produto_4']}}</p>
                                                <p>Brigadeiro: {{$mesa['qtdd_produto_5']}}</p>
                                                <br/>
                                            </div>
                                        </div>
                                        <hr class="hrdividir"/>
                                        <form action="{{ route('adicionarPedidos', ['id' => $mesa['id']]) }}" method="get">
                                            <div class="divcenter">
                                                <div class="produto">
                                                    <label>Adicionar: <label>
                                                    <input type="text" value="0" placeholder="..." name="aguas" required>
                                                    <label>Aguas<label>
                                                </div>
                                            </div>
                                            <div class="divcenter">
                                                <div class="produto">
                                                    <label>Adicionar: <label>
                                                    <input type="text" value="0" placeholder="..." name="cervejas" required>
                                                    <label>Cervejas<label>
                                                </div>
                                            </div>
                                            <div class="divcenter">
                                                <div class="produto">
                                                    <label>Adicionar: <label>
                                                    <input type="text" value="0" placeholder="..." name="refrigerantes" required>
                                                    <label>Refrigerantes<label>
                                                </div>
                                            </div>
                                            <div class="divcenter">
                                                <div class="produto">
                                                    <label>Adicionar: <label>
                                                    <input type="text" value="0" placeholder="..." name="pf" required>
                                                    <label>PF<label>
                                                </div>
                                            </div>
                                            <div class="divcenter">
                                                <div class="produto">
                                                    <label>Adicionar: <label>
                                                    <input type="text" value="0" placeholder="..." name="brigadeiro" required>
                                                    <label>Brigadeiro<label>
                                                </div>
                                            </div>
                                            <hr class="hrdividir"/>
                                            <div class="form-group">
                                                <button type="submit" class="">Adicionar Pedidos</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endif

                        @if($mesa['status'] == 'ocupada') 
                        <label for="modalmesaconta{{ $mesa->id }}" class="buttonmesa">Receber Conta</label>
                            <input type="checkbox" id="modalmesaconta{{ $mesa->id }}" class="checkboxModal">
                            <div class="modalmesadiv">
                                <label for="modalmesaconta{{ $mesa->id }}" class="fecharModal">X</label>
                                <div class="conteudomodal">
                                    <div class="form-group">
                                        
                                        <h1 class="h1pedidos">Mesa: {{$mesa['id']}}</h1>
                                        <hr class="hrdividir"/>
                                        <form action="{{ route('adicionarAoCaixa', ['id' => $mesa['id']]) }}" method="get">
                                            
                                            <div class="clientePagamento">
                                                <p>Conta da mesa: {{ ($mesa['qtdd_produto_1']*$precos['produto1'])+($mesa['qtdd_produto_2']*$precos['produto2'])+($mesa['qtdd_produto_3']*$precos['produto3'])+($mesa['qtdd_produto_4']*$precos['produto4'])+($mesa['qtdd_produto_5']*$precos['produto5']) }} R$</p>
                                                <select class="pagamento" name="pagamentototal" id="pagamentototal">    
                                                    <option value="{{round( (($mesa['qtdd_produto_1']*$precos['produto1'])+($mesa['qtdd_produto_2']*$precos['produto2'])+($mesa['qtdd_produto_3']*$precos['produto3'])+($mesa['qtdd_produto_4']*$precos['produto4'])+($mesa['qtdd_produto_5']*$precos['produto5'])))}}">valor</option>
                                                </select>
                                                <p>Valor dividido pelas pessoas da mesa.</p>
                                                <hr class="hrdividir"/>
                                                @for($i = 1; $i <= $mesa['qtdd_Pessoas'] ; $i++)
                                                <div>
                                                    <label>Pessoa {{$i}} - Metodo de pagamento: <label>
                                                    <select name="metodo{{$i}}" id="metodo{{$i}}">
                                                        <option value="dinheiro">dinheiro</option>
                                                        <option value="debito">debito</option>
                                                        <option value="credito">credito</option>
                                                        <option value="pix">pix</option>
                                                    </select>
                                                    <label>Valor da conta: {{round( (($mesa['qtdd_produto_1']*$precos['produto1'])+($mesa['qtdd_produto_2']*$precos['produto2'])+($mesa['qtdd_produto_3']*$precos['produto3'])+($mesa['qtdd_produto_4']*$precos['produto4'])+($mesa['qtdd_produto_5']*$precos['produto5']))/$mesa['qtdd_Pessoas'],2 )}} R$<label>
                                                    <select class="pagamento" name="pagamento{{$i}}" id="pagamento{{$i}}">
                                                        <option value="{{round( (($mesa['qtdd_produto_1']*$precos['produto1'])+($mesa['qtdd_produto_2']*$precos['produto2'])+($mesa['qtdd_produto_3']*$precos['produto3'])+($mesa['qtdd_produto_4']*$precos['produto4'])+($mesa['qtdd_produto_5']*$precos['produto5']))/$mesa['qtdd_Pessoas'],2 )}}">valor</option>
                                                    </select>
                                                </div>
                                                @endfor
                                                
                                            </div>
                                            <hr class="hrdividir"/>
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

</style>
