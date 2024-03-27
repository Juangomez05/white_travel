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


    Schema::create('restaurants', function (Blueprint $table) {
        $table->id();
        $table->string('name_restaurant', 111)->notNullable();
        $table->string('phone_restaurant', 15)->notNullable(); // Cambiado a string
        $table->string('email_restaurant', 122)->nullable();
        $table->string('schedule_restaurant', 122)->notNullable();
        $table->text('description_restaurant')->notNullable();
        $table->string('punctuation_restaurant')->notNullable();
        $table->string('category_restaurant', 122)->notNull();
        $table->timestamps();   
    });
}
    protected $connection = 'pgsql';
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('restaurants');
    }
};
