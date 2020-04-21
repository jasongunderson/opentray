<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Staff;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('facility');
            $table->string('fname');
            $table->string('lname');
            $table->string('uname');
            $table->integer('permission');
            $table->string('password');
            $table->boolean('active');
            $table->timestamps();
        });

        $staff = new Staff([
            'facility' => 1,
            'fname' => 'admin',
            'lname' => 'admin',
            'uname' => 'admin',
            'password' => Hash::make('admin'),
            'permission' => 0,
            'active' => true
        ]);
        $staff->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
