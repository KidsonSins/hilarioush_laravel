<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('information');
            $table->string('photo_id');
            $table->string('address');
            $table->string('phone_no');
            $table->string('fax_no');
            $table->string('website');
            $table->string('email');
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
        Schema::drop('schoolinfos');
    }
}
