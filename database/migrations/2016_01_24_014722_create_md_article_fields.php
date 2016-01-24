<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMdArticleFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function ($table) {
            $table->text('score_text_md');
            $table->text('gameplay_md');
            $table->text('story_md');
            $table->text('graphics_md');
            $table->text('conclusion_md');
            $table->text('screenshots_md');
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
            $table->dropColumn('score_text_md');
            $table->dropColumn('gameplay_md');
            $table->dropColumn('story_md');
            $table->dropColumn('graphics_md');
            $table->dropColumn('conclusion_md');
            $table->dropColumn('screenshots_md');
        });
    }
}
