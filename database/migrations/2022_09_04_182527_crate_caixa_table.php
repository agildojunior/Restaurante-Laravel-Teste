<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixa', function (Blueprint $table) {
            $table->id();
            $table->double('mesa_id')->nullable();
            $table->double('agua')->nullable();
            $table->double('cerveja')->nullable();
            $table->double('refrigerante')->nullable();
            $table->double('PF')->nullable();
            $table->double('brigadeiro')->nullable();
            $table->double('preco')->nullable();
            $table->double('valor_por_cliente')->nullable();
            $table->string('metodo_pagamento_1')->nullable();
            $table->double('valor_por_cliente2')->nullable();
            $table->string('metodo_pagamento_2')->nullable();
            $table->double('valor_por_cliente3')->nullable();
            $table->string('metodo_pagamento_3')->nullable();
            $table->double('valor_por_cliente4')->nullable();
            $table->string('metodo_pagamento_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caixa');
    }
};
