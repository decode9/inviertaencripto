<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Role;
use App\Credential;

class RoleCredentialData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        $roleB = new Role;
        $roleB->name = "Basic User";
        $roleB->slug = "Basic User";
        $roleB->code = "010";
        $roleB->description = "This role is the default for all users and it will only give little access.";
        $roleB->save();

        /*Crear role Admin*/

        $roleAdmin = new Role;
        $roleAdmin->name = "Admin User";
        $roleAdmin->slug = "Administrator";
        $roleAdmin->code = "901";
        $roleAdmin->description = "This role will grant all access";
        $roleAdmin->save();



        $rolestore = new Role;
        $rolestore->name = "Store User";
        $rolestore->slug = "Store Manager";
        $rolestore->code = "020";
        $rolestore->description = "This role grant Access for Store options";
        $rolestore->save();

        $roleClientTr = new Role;
        $roleClientTr->name = "Client Store User";
        $roleClientTr->slug = "Client in store";
        $roleClientTr->code = "030";
        $roleClientTr->description = "This role grant Access to clients for store";
        $roleClientTr->save();

        $roleClientMn = new Role;
        $roleClientMn->name = "Client Mining User";
        $roleClientMn->slug = "Client in mining";
        $roleClientMn->code = "040";
        $roleClientMn->description = "This role grant Access to clients for Mining";
        $roleClientMn->save();

        $roleMiningSup = new Role;
        $roleMiningSup->name = "Mining Supervisor User";
        $roleMiningSup->slug = "Mining Supervisor";
        $roleMiningSup->code = "050";
        $roleMiningSup->description = "This role grant Access for Supervisors";
        $roleMiningSup->save();

        $credentials = Credential::all();

        foreach($credentials as $credential){

            $roleAdmin->credentials()->attach($credential);


            if(intval($credential->code) >= 250 && intval($credential->code) <= 349){
                $roleMiningSup->credentials()->attach($credential);
            }

            if((intval($credential->code) >= 300 && intval($credential->code) <= 301)){
                $roleClientMn->credentials()->attach($credential);
            }

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
