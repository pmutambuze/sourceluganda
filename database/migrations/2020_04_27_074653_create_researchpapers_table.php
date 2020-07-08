<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchpapers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('abstract');
            $table->longText('keywords');
            $table->integer('journal_id');
            $table->string('authors_name');
            $table->string('authors_email');
            $table->string('address');
            $table->string('country');
            $table->string('organisation');
            $table->string('mobile');
            $table->string('viewers_name');
            $table->string('viewers_email');
            $table->string('research_paper_url')->nullable();
            $table->string('status')->default('not_published');
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
        Schema::dropIfExists('researchpapers');
    }
}
