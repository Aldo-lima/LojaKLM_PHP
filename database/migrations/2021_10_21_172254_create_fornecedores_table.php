<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome',200);
            $table->string('nome_r',200);
            $table->string('cnpj',20);
            $table->string('inscri_esta',20);
            $table->string('cep', 15);
            $table->string('rua',50);
            $table->string('estado',20);
            $table->integer('numero');
            $table->string('cidade',50);
            $table->string('proximidade',50);
            $table->string('bairro',50);
            $table->string('complemento',50);
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('fornecedores');
    }
}
