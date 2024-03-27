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
    Schema::create('touristic_places', function (Blueprint $table) {
        $table->id();
        $table->string('name_touristic_place', 55)->notNull();
        $table->string('type_touristic_place', 45)->notNull();
        $table->string('phone_touristic_place', 23)->nullable(); // Cambiado a string
        $table->string('address_touristic_place', 45)->notNull();
        $table->string('schedule_touristic_place', 122)->notNull();
        $table->text('description_touristic_place')->notNull();
        $table->string('punctuation_touristic_place')->notNull(); // No se requiere primary key aquí
        $table->string('category_touristic_place', 122)->notNull();
        $table->timestamps(); 
    });
}
    protected $connection = 'pgsql';
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('touristic_places');
    }
};
