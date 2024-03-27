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
    Schema::create('recommendations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_userf');
        $table->unsignedBigInteger('id_touristic_placef')->nullable();
        $table->unsignedBigInteger('id_restaurantf')->nullable();
        $table->unsignedBigInteger('id_hotelf')->nullable();
        $table->string('category', 122)->notNull();
        $table->timestamps();

        $table->foreign('id_hotelf')->references('id')->on('hotels');
        $table->foreign('id_touristic_placef')->references('id')->on('touristic_places');
        $table->foreign('id_restaurantf')->references('id')->on('restaurants');
        $table->foreign('id_userf')->references('id')->on('users');
    });
}
    protected $connection = 'pgsql';
    public function down(): void
    {
        Schema::drop('recommendations');
    }
};
