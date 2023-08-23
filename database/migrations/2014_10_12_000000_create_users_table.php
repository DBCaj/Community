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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('birth_month');
            $table->string('birth_day');
            $table->string('birth_year');
            $table->integer('age')->nullable(); //must be nullable for now, in order to store user under user-management/user-information/create
            $table->string('gender');
            $table->string('role')->default('user');
            $table->string('department');
            $table->string('contact');
            $table->string('house_lot_block_street');
            $table->string('country');
            $table->string('province');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('zip_code');
            $table->integer('status')->nullable();
            $table->rememberToken();
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
