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
    public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name_user', 45);
        $table->string('email_user', 255);
        $table->string('email_verified_at')->nullable();
        $table->string('password_user', 255);
        $table->integer('phone_user')->notNull(); // Cambié serial por varchar, ya que generalmente el número de teléfono no es autoincremental
        $table->timestamp('birthdame_user')->nullable();;
        $table->string('remember_token', 100)->nullable();
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
};
