<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copackages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->string('package_code');
            $table->string('package_price');
            $table->string('Number_of_chanel');
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
        Schema::dropIfExists('copackages');
    }
}
