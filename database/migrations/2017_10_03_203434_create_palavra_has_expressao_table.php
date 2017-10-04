<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePalavraHasExpressaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('palavra_has_expressao', function(Blueprint $table)
		{
			$table->integer('palavra_id')->index('fk_palavra_has_expressao_palavra1_idx');
			$table->integer('expressao_id')->index('fk_palavra_has_expressao_expressao1_idx');
			$table->timestamps();
			$table->primary(['palavra_id','expressao_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('palavra_has_expressao');
	}

}
