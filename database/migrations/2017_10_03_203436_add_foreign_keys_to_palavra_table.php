<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPalavraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('palavra', function(Blueprint $table)
		{
			$table->foreign('lingua_id', 'fk_palavra_lingua')->references('id')->on('lingua')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('palavra', function(Blueprint $table)
		{
			$table->dropForeign('fk_palavra_lingua');
		});
	}

}
