<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $table->string('username');
            $table->string('password');
            $table->string('nama_user');
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        $dummyUsers = [
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'nama_user' => 'Administrator',
            'email' => 'admin@admin.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        DB::table('users')->insert($dummyUsers);
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
