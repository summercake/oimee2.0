<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_password');
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->tinyint('user_gender');
            $table->string('user_avatar');
            $table->string('user_email')->unique();
            $table->string('user_phone');
            $table->string('user_wechat_id');
            $table->tinyint('active_flag');
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
