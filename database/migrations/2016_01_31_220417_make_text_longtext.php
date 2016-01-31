<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class MakeTextLongtext extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE  `articles` CHANGE  `gameplay`  `gameplay` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `story`  `story` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `graphics`  `graphics` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `conclusion`  `conclusion` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `gameplay_md`  `gameplay_md` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `story_md`  `story_md` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `graphics_md`  `graphics_md` LONGTEXT; 
                      ALTER TABLE  `articles` CHANGE  `conclusion_md`  `conclusion_md` LONGTEXT; ');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE  `articles` CHANGE  `gameplay`  `gameplay` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `story`  `story` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `graphics`  `graphics` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `conclusion`  `conclusion` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `gameplay_md`  `gameplay_md` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `story_md`  `story_md` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `graphics_md`  `graphics_md` TEXT; 
                      ALTER TABLE  `articles` CHANGE  `conclusion_md`  `conclusion_md` TEXT; ');
    }
}
