<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->index()->unsigned();
            $table->integer('cover_id')->unsigned();
            $table->string('slug', 255)->unique();
            $table->longText('contents');
            $table->boolean('published');
            $table->integer('approved_version');
            $table->timestamps();
            $table->softDeletes();
        });
        DB::statement('ALTER TABLE `articles` ADD `ip_address` VARBINARY(16)'); //http://stackoverflow.com/questions/17795517/laravel-4-saving-ip-address-to-model
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `articles` DROP COLUMN `ip_address`');
        Schema::drop('articles');
    }
}
