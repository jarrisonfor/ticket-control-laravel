<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimiento_producto', function (Blueprint $table) {
            $table->foreignId('establecimiento_id')->constrained();
            $table->foreignId('producto_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['establecimiento_id', 'producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimiento_producto');
    }
}
