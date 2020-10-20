<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('Code');
            $table->string('City');
            $table->string('Phone');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('State');
            $table->string('Cuntry');
            $table->integer('PostelCode');
            $table->string('Territory');
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
        Schema::dropIfExists('offices');
    }
}
