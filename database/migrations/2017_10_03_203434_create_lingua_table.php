<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinguaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lingua', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45);
			$table->string('abreviatura', 5)->unique('abrevitura_UNIQUE');
			$table->string('pais', 100);
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
		Schema::drop('lingua');
	}

}
