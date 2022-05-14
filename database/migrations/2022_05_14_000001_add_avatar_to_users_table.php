<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->after('introduction')->nullable()->comment('Ảnh đại diện');
            $table->string('phone_company')->after('introduction')->nullable()->comment('Hãng điện thoại đang dùng');
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('avatar');
            $table->dropColumn('phone_company');
        });
    }
}
