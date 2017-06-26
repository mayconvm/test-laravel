<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('idcourses');
            
            $table->text('title');
            $table->text('category');
            $table->text('description');
            $table->decimal('price', 5, 2);
            $table->text('start');
            $table->text('finish');

            $table->unsignedInteger('consultants_idconsultants');
            $table->unsignedInteger('addresses_idaddresses');

            $table->foreign('consultants_idconsultants')->references('idconsultants')->on('consultants');
            $table->foreign('addresses_idaddresses')->references('idaddresses')->on('addresses');

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
        Schema::dropIfExists('courses');
    }
}
