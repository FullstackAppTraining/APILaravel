<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePalavraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('palavra', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('designacao', 45)->unique('designacao_UNIQUE');
			$table->string('significado', 45)->nullable();
			$table->string('sinonimo', 45)->nullable();
			$table->integer('lingua_id')->index('fk_palavra_lingua_idx');
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
		Schema::drop('palavra');
	}

}
