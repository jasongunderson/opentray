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
            'fname' => 'admin0',
            'lname' => 'admin0',
            'uname' => 'admin0',
            'password' => Hash::make('password'),
            'permission' => 0,
            'active' => true
        ]);
        $staff->save();

        $staff = new Staff([
            'facility' => 1,
            'fname' => 'admin1',
            'lname' => 'admin1',
            'uname' => 'admin1',
            'password' => Hash::make('password'),
            'permission' => 1,
            'active' => true
        ]);
        $staff->save();

        $staff = new Staff([
            'facility' => 1,
            'fname' => 'admin2',
            'lname' => 'admin2',
            'uname' => 'admin2',
            'password' => Hash::make('password'),
            'permission' => 2,
            'active' => true
        ]);
        $staff->save();

        $staff = new Staff([
            'facility' => 1,
            'fname' => 'admin3',
            'lname' => 'admin3',
            'uname' => 'admin3',
            'password' => Hash::make('password'),
            'permission' => 3,
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
