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
    Schema::create('hotels', function (Blueprint $table) {
        $table->id(); //Codigo de hotel 1, codigo restaurante 2, sitio 3
        $table->string('name_hotel', 45)->notNull();
        $table->string('address_hotel', 55)->notNull();
        $table->string('phone_hotel', 23)->nullable(); 
        $table->string('email_hotel', 55)->nullable();
        $table->string('website_hotel', 222)->nullable();
        $table->string('category_hotel', 122)->notNull();
        $table->text('description_hotel')->notNull();
        $table->string('punctuation_hotel')->notNull(); 
        $table->timestamps();

    });
}
    protected $connection = 'pgsql';
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('hotels');
    }
};
