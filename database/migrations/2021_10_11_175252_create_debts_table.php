<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->text('message')->nullable();
            $table->date('time1')->nullable();
            $table->date('time2')->nullable();
            $table->decimal('pay')->nullable();
            $table->decimal('total')->nullable();
            $table->timestamps();           

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_debts_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debts');
    }
}
