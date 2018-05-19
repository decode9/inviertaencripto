<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CredentialsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('credentials')->insert([
                /*Store 0150-0199*/
                ['name' => 'Access Store', 'code' => '0150', 'description' => 'Grant access to users store' , 'belongs' => 'Store'],
                ['name' => 'Search Store', 'code' => '0151', 'description' => 'Grant permition to search store', 'belongs' => 'Store'],
                ['name' => 'Create Store', 'code' => '0152', 'description' => 'Grant permition to create store', 'belongs' => 'Store'],
                ['name' => 'Edit Store', 'code' => '0153', 'description' => 'Grant permition to  edit store', 'belongs' => 'Store'],
                ['name' => 'Delete Store', 'code' => '0154', 'description' => 'Grant permition to delete store', 'belongs' => 'Store'],
                ['name' => 'Verify Store', 'code' => '0155', 'description' => 'Grant permition to verify store', 'belongs' => 'Store'],
                ['name' => 'Block Store', 'code' => '0156', 'description' => 'Grant permition to block store', 'belongs' => 'Store'],
                ['name' => 'Unblock Store', 'code' => '0157', 'description' => 'Grant permition to unblock store', 'belongs' => 'Store'],
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('credentials')->where('belongs', 'Store')->delete();
    }
}
