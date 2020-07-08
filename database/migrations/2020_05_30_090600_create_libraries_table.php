<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('owner_id')->constrained('users', 'id');
            $table->longText('abstract');
            $table->longText('keywords');
            $table->foreignId('category_id')->constrained('categories', 'id');
            $table->string('authors_name');
            $table->string('authors_email');
            $table->string('address');
            $table->string('country');
            $table->string('status')->default('not_published');
            $table->string('organisation');
            $table->string('mobile');
            $table->string('viewers_name');
            $table->string('viewers_email');
            $table->boolean('approved')->default(false);
            $table->string('library_url')->nullable();
            $table->string('total_words');
            $table->integer('package_id');
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
        Schema::dropIfExists('libraries');
    }
}
