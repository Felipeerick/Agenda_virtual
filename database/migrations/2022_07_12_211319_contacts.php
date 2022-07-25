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
        Schema::create('Contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('email');
            $table->string('cpf');
            $table->string('tel');
            $table->string('photo')->nullable();
            $table->string('cep')->nullable();
            $table->string('street');
            $table->string('neighborhood');
            $table->string('state');
            $table->string('updated_at');
            $table->string('created_at');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
            Schema::dropIfExists('Contacts');
    }
};
