<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('room_number');
            $table->text('description')->nullable();
            $table->integer('no_of_bed');
            $table->integer('status');
            $table->decimal('price', 10, 2);
            $table->text('image')->nullable();
            $table->json('amenities')->nullable();
            $table->foreignId('room_category_id')->constrained('room_categories')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
