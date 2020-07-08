<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalpoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalpolicies', function (Blueprint $table) {
            $table->id();
            $table->string('journal_policies')->default('journal_policies');
            $table->longText('guidelines')->nullable();
            $table->longText('paperpublication')->nullable();
            $table->longText('submission')->nullable();
            $table->longText('payment_policy')->nullable();
            $table->longText('loyality_reward')->nullable();
            $table->longText('plagiarism')->nullable();
            $table->longText('academic_misconduct')->nullable();
            $table->longText('layout')->nullable();
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
        Schema::dropIfExists('journalpolicies');
    }
}
