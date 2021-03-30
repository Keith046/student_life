<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AccountsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW accounts_view 
        AS
        SELECT
           users.id,
           users.name,
           users.email,
           users.password,
            roles.display_name AS status
           
        FROM
            users
            LEFT JOIN role_user ON users.id = role_user.user_id
            LEFT JOIN roles ON role_user.role_id = roles.id;
    "); //
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
