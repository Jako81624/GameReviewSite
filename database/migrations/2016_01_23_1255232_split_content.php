<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SplitContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('articles', function ($table) {
			$table->text('gameplay');
			$table->text('story');
			$table->text('graphics');
			$table->text('conclusion');
			$table->text('screenshots');
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
			$table->dropColumn('gameplay');
			$table->dropColumn('story');
			$table->dropColumn('graphics');
			$table->dropColumn('conclusion');
			$table->dropColumn('screenshots');
		});
    }
}
