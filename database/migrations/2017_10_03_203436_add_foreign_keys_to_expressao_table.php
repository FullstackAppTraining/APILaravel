<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExpressaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('expressao', function(Blueprint $table)
		{
			$table->foreign('calao_id', 'fk_expressao_calao1')->references('id')->on('calao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('expressao', function(Blueprint $table)
		{
			$table->dropForeign('fk_expressao_calao1');
		});
	}

}
