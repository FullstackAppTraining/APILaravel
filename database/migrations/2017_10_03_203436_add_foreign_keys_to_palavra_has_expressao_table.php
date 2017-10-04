<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPalavraHasExpressaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('palavra_has_expressao', function(Blueprint $table)
		{
			$table->foreign('expressao_id', 'fk_palavra_has_expressao_expressao1')->references('id')->on('expressao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('palavra_id', 'fk_palavra_has_expressao_palavra1')->references('id')->on('palavra')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('palavra_has_expressao', function(Blueprint $table)
		{
			$table->dropForeign('fk_palavra_has_expressao_expressao1');
			$table->dropForeign('fk_palavra_has_expressao_palavra1');
		});
	}

}
