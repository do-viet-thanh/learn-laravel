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
            $table->id();
            $table->string('email')->unique()->comment('Email đăng nhập');
            $table->string('password')->comment('Mật khẩu');
            $table->string('username')->comment('Tên thành viên');
            $table->string('name')->nullable()->comment('Họ tên');
            $table->string('phone')->nullable()->comment('Số điện thoại');
            $table->date('date_of_birth')->nullable()->comment('Ngày tháng năm sinh');
            $table->string('address')->nullable()->comment('Địa chỉ');
            $table->integer('gender')->nullable()->comment('Giới tính');
            $table->string('hobbies')->nullable()->comment('Sở thích');
            $table->string('introduction')->nullable()->comment('Mô tả ngắn');
            $table->dateTime('email_verified_at')->nullable()->comment('Thời gian xác thực email');
            $table->timestamps();
            $table->softDeletes();
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
