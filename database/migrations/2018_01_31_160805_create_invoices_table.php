<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('car_id')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('qty')->nullable();
            $table->date('date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoices');
    }
}
