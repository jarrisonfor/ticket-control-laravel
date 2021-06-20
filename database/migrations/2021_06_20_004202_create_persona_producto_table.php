<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_producto', function (Blueprint $table) {
            $table->foreignId('persona_id')->constrained();
            $table->foreignId('producto_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['persona_id', 'producto_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_producto');
    }
}
