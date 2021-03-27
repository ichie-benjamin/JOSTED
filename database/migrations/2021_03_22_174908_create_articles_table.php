<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
             $table->string('first_name')->nullable();
             $table->string('last_name')->nullable();
             $table->integer('user_id')->nullable();
             $table->string('article_title')->nullable();
             $table->string('name_of_author')->nullable();
             $table->string('author_2')->nullable();
             $table->string('other_authors')->nullable();
             $table->string('article_type')->nullable();
             $table->string('subject_area')->nullable();
             $table->string('article')->nullable();
             $table->string('article_2')->nullable();
             $table->string('article_3')->nullable();
             $table->string('email')->nullable();
             $table->string('phone')->nullable();
             $table->string('state')->nullable();
             $table->string('city')->nullable();
             $table->string('country')->nullable();
             $table->string('zip')->nullable();
             $table->boolean('approved')->default(0);
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
        Schema::dropIfExists('articles');
    }
}
