<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_ticket', function (Blueprint $table) {
            $table->foreignId('producto_id')->constrained();
            $table->foreignId('ticket_id')->constrained();
            $table->integer('cantidad');
            $table->decimal('precio');
            $table->boolean('oferta');
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['producto_id', 'ticket_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_ticket');
    }
}
