<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Smartready000 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				schema::create('user',
					function(Blueprint $table){
						$table->charset = 'utf8mb4';
						$table->collation = 'utf8mb4_unicode_ci';

						$table->engine = 'InnoDB';

						$table->increments('id');
						$table->primary('id');
						$table->unique('id');
						$table->string('name');
						/*
						$table->string('lasname');
						$table->string('email');
						$table->string('password');
						$table->boolean('remember');
						$table->string('extimg');
						*/ 
						$table->timestamps();
					}
				);
    }
		/*

		*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
				schema::drop('user');
    }
}
