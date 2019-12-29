<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        [
            'name'=> 'Laravel',
            'slug'=>'laravel',

        ],[
            'name'=> 'Symfony',
            'slug'=>'symfony',

        ],[
            'name'=> 'Reactjs',
            'slug'=>'Reactjs',

        ],[
            'name'=> 'Vuejs',
            'slug'=>'vuejs',

        ],[
            'name'=> 'Angular',
            'slug'=>'angular',

        ],[
            'name'=> 'Flatter',
            'slug'=>'flatter',

        ],[
            'name'=> 'Ruby on Rails',
            'slug'=>'ruby on rails',

        ],[
            'name'=> 'Bootstrap',
            'slug'=>'bootstrap',

        ],[
            'name'=> 'Jquery',
            'slug'=>'jquery',

        ],[
            'name'=> 'Nodejs',
            'slug'=>'nodejss',

        ],[
            'name'=> 'Git',
            'slug'=>'git',

        ],[
            'name'=> 'MVC',
            'slug'=>'mvc',

        ],[
            'name'=> 'WordPress',
            'slug'=>'wordpress',

        ],[
            'name'=> 'Drupal',
            'slug'=>'drupal',

        ],[
            'name'=> 'VanillaJS',
            'slug'=>'vanilaJS',

        ]
        ]);
    }
}
