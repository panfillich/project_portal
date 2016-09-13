<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BanListHist extends Migration
{
    private $table_name = 'ban_list_hist';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            //ban_list_hist
            $table  ->  increments('ban_list_hist');
            //id_user
            $table  ->  integer('id_user')
                    ->  comment('Забаненый юзер');
            //id_ban_list_type
            $table  ->  integer('id_ban_list_type')
                    ->  comment('Тип бана');
            //to_date
            $table  ->  date('to_date')
                    ->  comment('Дата истечения срока бана');
            //id_admin
            $table  ->  integer('id_admin')
                    ->  comment('Кто банил');
            //comment_admin
            $table  ->  string('comment_admin');
            //created_at
            $table  ->  timestamp('created_at')->nullable();
            //Составной индекс
            $table  ->index(array('id_user', 'id_ban_list_type'));
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
