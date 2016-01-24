<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullableArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function ($table) {
            $table->text('score_text_md')->nullable()->change();
            $table->text('gameplay_md')->nullable()->change();
            $table->text('story_md')->nullable()->change();
            $table->text('graphics_md')->nullable()->change();
            $table->text('conclusion_md')->nullable()->change();
            $table->text('screenshots_md')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::table('articles', function ($table) {
            $table->text('score_text_md')->change();
            $table->text('gameplay_md')->change();
            $table->text('story_md')->change();
            $table->text('graphics_md')->change();
            $table->text('conclusion_md')->change();
            $table->text('screenshots_md')->change();
        });
    }
}
