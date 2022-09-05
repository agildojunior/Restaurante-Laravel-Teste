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
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->id();
            $table->double('mesa_id')->nullable();
            $table->double('agua')->nullable();
            $table->double('cerveja')->nullable();
            $table->double('refrigerante')->nullable();
            $table->double('PF')->nullable();
            $table->double('brigadeiro')->nullable();
            $table->double('preco')->nullable();
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
        Schema::dropIfExists('movimentacoes');
    }
};
