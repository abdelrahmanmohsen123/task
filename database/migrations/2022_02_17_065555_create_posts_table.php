<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',80);
            $table->text('details');
            $table->date('date');
            $table->text('image')->nullable();           
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');

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
        Schema::dropIfExists('posts');
    }
}
