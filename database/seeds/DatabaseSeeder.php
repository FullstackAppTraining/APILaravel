<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\Models\Lingua::class,20)->create();
        factory(\App\Models\Calao::class,20)->create();
        factory(\App\Models\Expressao::class,\App\Models\Calao::all()->count())->create();
        factory(\App\Models\Palavra::class,\App\Models\Lingua::all()->count())->create();
        factory(\App\Models\PalavraExpressao::class,20)->create();
    }
}
