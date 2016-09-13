<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BanListType extends Migration
{
    private $table_name = 'ban_list_type';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            //id_ban_list_type
            $table  ->  integer('id_ban_list_type') ->  unique();
            //name
            $table  ->  string('description');
            //Create key
            $table  ->  primary('id_ban_list_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->table_name);
    }
}
