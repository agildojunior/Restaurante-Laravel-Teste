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
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->string('status');//disponivel ou ocupada
            $table->double('qtdd_Pessoas')->nullable();
            $table->double('qtdd_produto_1')->nullable();
            $table->double('qtdd_produto_2')->nullable();
            $table->double('qtdd_produto_3')->nullable();
            $table->double('qtdd_produto_4')->nullable();
            $table->double('qtdd_produto_5')->nullable();
            $table->timestamps();
        });

        // --------- Criando as mesas ----------
        // mesa1
        DB::table('mesas')->insert(
            array(
                'status' => 'disponivel',
                'qtdd_produto_1' => 0,
                'qtdd_produto_2' => 0,
                'qtdd_produto_3' => 0,
                'qtdd_produto_4' => 0,
                'qtdd_produto_5' => 0,
            )
        );
        // mesa2
        DB::table('mesas')->insert(
            array(
                'status' => 'disponivel',
                'qtdd_produto_1' => 0,
                'qtdd_produto_2' => 0,
                'qtdd_produto_3' => 0,
                'qtdd_produto_4' => 0,
                'qtdd_produto_5' => 0,
            )
        );
        // mesa3
        DB::table('mesas')->insert(
            array(
                'status' => 'disponivel',
                'qtdd_produto_1' => 0,
                'qtdd_produto_2' => 0,
                'qtdd_produto_3' => 0,
                'qtdd_produto_4' => 0,
                'qtdd_produto_5' => 0,
            )
        );
        // mesa4
        DB::table('mesas')->insert(
            array(
                'status' => 'disponivel',
                'qtdd_produto_1' => 0,
                'qtdd_produto_2' => 0,
                'qtdd_produto_3' => 0,
                'qtdd_produto_4' => 0,
                'qtdd_produto_5' => 0,
            )
        );
        // mesa5
        DB::table('mesas')->insert(
            array(
                'status' => 'disponivel',
                'qtdd_produto_1' => 0,
                'qtdd_produto_2' => 0,
                'qtdd_produto_3' => 0,
                'qtdd_produto_4' => 0,
                'qtdd_produto_5' => 0,
            )
        );
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
};
