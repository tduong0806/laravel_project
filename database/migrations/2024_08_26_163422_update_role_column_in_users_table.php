<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRoleColumnInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user')->change(); 
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('')->change(); 
        });
    }
}