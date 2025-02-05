<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('shipping_address_id')->nullable()->constrained()->onDelete('set null');
            $table->string('number')->nullable();
            $table->float('subtotal');
            $table->float('total');
            $table->float('shipping_price');
            $table->string('shipping_method')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_id')->nullable();
            $table->json('payment_data')->nullable();
            $table->enum('payment_status', ['Aprobado', 'Pendiente', 'Rechazado'])->default('Pendiente');
            $table->enum('status', ['Procesando', 'Completado', 'Cancelado'])->default('Procesando');
            $table->boolean('send_email')->nullable()->default(false);
            $table->longText('send_email_error')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
