<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('email')
                ->unique();
                $table->string('cpf')
                ->unique()
                ->nullable();
            $table->string('password');
            $table->enum('role', ['leitor', 'atendente', 'administrador'])
                ->default('leitor');
            $table->string('name');
            $table->string('avatar')
                ->nullable();
            $table->string('address')
                ->nullable();
            $table->string('phone')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
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
