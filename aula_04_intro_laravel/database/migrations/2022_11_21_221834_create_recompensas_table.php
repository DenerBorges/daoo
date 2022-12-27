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
        Schema::create('recompensas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('projeto_id')
                    ->constrained()
                    ->cascadeOnDelete();
            $table->text('titulo');
            $table->text('descricao');
            $table->float('valor');
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
        Schema::dropIfExists('recompensas');
    }
};
