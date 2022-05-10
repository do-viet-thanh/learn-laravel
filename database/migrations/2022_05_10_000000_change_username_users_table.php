<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserNameUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->comment('Tên thành viên')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->string('username')->comment('Tên thành viên')->nullable(false)->change();
        });
    }
}
