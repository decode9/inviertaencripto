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
                /*Noticias 0200-0249*/
                ['name' => 'Access Posts', 'code' => '0200', 'description' => 'Grant access to post section' , 'belongs' => 'Posts'],
                ['name' => 'Search Posts', 'code' => '0201', 'description' => 'Grant permition to search post', 'belongs' => 'Posts'],
                ['name' => 'Create Posts', 'code' => '0202', 'description' => 'Grant permition to create post', 'belongs' => 'Posts'],
                ['name' => 'Edit Posts', 'code' => '0203', 'description' => 'Grant permition to  edit post', 'belongs' => 'Posts'],
                ['name' => 'Delete Posts', 'code' => '0204', 'description' => 'Grant permition to delete post', 'belongs' => 'Posts'],
                ['name' => 'Verify Posts', 'code' => '0205', 'description' => 'Grant permition to verify post', 'belongs' => 'Posts'],
                ['name' => 'Block Posts', 'code' => '0207', 'description' => 'Grant permition to block post', 'belongs' => 'Posts'],
                ['name' => 'Unblock Posts', 'code' => '0208', 'description' => 'Grant permition to unblock post', 'belongs' => 'Posts'],
                ['name' => 'Comment Posts', 'code' => '0209', 'description' => 'Grant permition to comment post', 'belongs' => 'Posts'],
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
        DB::table('credentials')->where('belongs', 'Users')->delete();
    }
}
