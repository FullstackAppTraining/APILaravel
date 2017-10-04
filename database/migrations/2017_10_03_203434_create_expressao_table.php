<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpressaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expressao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45);
			$table->string('significado', 100);
			$table->integer('calao_id')->index('fk_expressao_calao1_idx');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('expressao');
	}

}
