<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Одноместный номер', 'Двухместный номер', 'Трехместный номер', 'Номер Люкс']);
            $table->text('description');
            $table->text('equipment');
            $table->text('includes');
            $table->string('price');
            $table->enum('city', ['Феодосия', 'Симферополь', 'Севастополь', 'Саки']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
}
