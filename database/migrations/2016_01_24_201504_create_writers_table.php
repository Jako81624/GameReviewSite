<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writers', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('image',60);
			$table->string('country',60);
			$table->string('homepage',60);
			$table->string('reddit',60);
			$table->string('twitter',60);
			$table->string('youtube',60);
			$table->string('steam',60);
			$table->text('about');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('writers');
    }
}
