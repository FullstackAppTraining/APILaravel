<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45)->nullable();
			$table->integer('lingua_id')->index('fk_calao_lingua1_idx');
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
		Schema::drop('calao');
	}

}
