<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleScreenshotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_screenshots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE `article_screenshots` ADD `ip_address` VARBINARY(16)'); //http://stackoverflow.com/questions/17795517/laravel-4-saving-ip-address-to-model
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE `article_screenshots` DROP COLUMN `ip_address`');
        Schema::drop('article_screenshots');
    }
}
