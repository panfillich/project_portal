<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfSimpleVariable extends Migration
{
    private $table_name = 'conf_simple_variable';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table  -> increments('id_conf_simple_variable');
            $table  -> string('name',32)->unique();
            $table  -> string('variable',32);
            $table  -> string('type',32);
            $table  -> string('comment',256);
            $table  -> integer('id_user') -> comment('Id пользователя, который вносил ин-ю.');
            $table  -> integer('id_conf_simple_variable_pre')->default(0)->comment('Предыдущее изменение, записаное по данному id 56'.
                               '(в таблице id_conf_simple_variable_hist).');
            $table  -> timestamp('created_at');
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
