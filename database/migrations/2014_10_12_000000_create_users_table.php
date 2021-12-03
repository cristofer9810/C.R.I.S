<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone')->default('');
            $table->string('address')->default('');
            $table->enum('cargo', ['Administrador', 'Celador', 'Aseadora', 'Todero', 'Asistentes', 'No registra']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('color')->nullable();
            $table->string('password');
            $table->enum('status',['deuda', 'no deuda'])->default('no deuda');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
