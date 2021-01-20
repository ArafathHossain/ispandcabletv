<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Client_type');
            $table->string('isp_pack_id');
            $table->string('co_pack_id');
            $table->string('gender');
            $table->string('father_name');
            $table->string('Mother_name');
            $table->string('date_of_birth');
            $table->string('occupation');
            $table->string('district_id');
            $table->string('upazila_thana_id');
            $table->string('road_no');
            $table->string('house_no');
            $table->string('present_add');
            $table->string('permanent_add');
            $table->string('nid_brth_no');
            $table->string('nid_brth_pic');
            $table->string('reg_form_no');
            $table->string('reg_form_pic');
            $table->string('pro_picture');
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
