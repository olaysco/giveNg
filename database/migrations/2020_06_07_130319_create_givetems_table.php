<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGivetemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('givetems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image_url');
            $table->string('caption');
            $table->string('rating');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('available');
            $table->string('pickup_location');
            $table->string('info');
            $table->text('tags');
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
        Schema::dropIfExists('givetems');
    }
}
