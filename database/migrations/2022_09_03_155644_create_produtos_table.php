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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('preco');
            $table->timestamps();
        });

        // --------- inserindo produtos diretamente ----------
        // Agua
        DB::table('produtos')->insert(
            array(
                'name' => 'agua',
                'preco' => 2,
            )
        );
        // cerveja
        DB::table('produtos')->insert(
            array(
                'name' => 'cerveja',
                'preco' => 4,
            )
        );
        // refrigerante
        DB::table('produtos')->insert(
            array(
                'name' => 'refrigerante',
                'preco' => 6,
            )
        );
        // PF
        DB::table('produtos')->insert(
            array(
                'name' => 'PF',
                'preco' => 10,
            )
        );
        // brigadeiro
        DB::table('produtos')->insert(
            array(
                'name' => 'brigadeiro',
                'preco' => 3,
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
        Schema::dropIfExists('produtos');
    }
};
