<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCalaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('calao', function(Blueprint $table)
		{
			$table->foreign('lingua_id', 'fk_calao_lingua1')->references('id')->on('lingua')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('calao', function(Blueprint $table)
		{
			$table->dropForeign('fk_calao_lingua1');
		});
	}

}
