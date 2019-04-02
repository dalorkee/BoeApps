<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppsRating extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('apps_rating', function (Blueprint $table) {
			$table->increments('id');
			$table->string('apps_id')->nullable();
			$table->integer('rating')->default(0)->unsign();
			$table->timestamps();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down() {
		//
	}
}
