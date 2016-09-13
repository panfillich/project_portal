<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfSimpleVariables extends Migration
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
            $table  -> integer('id_conf_simple_variable');
            $table  -> string('name')->unique();
            $table  -> string('variable');
            $table  -> string('type');
            $table  -> integer('id_user') -> comment('Id пользователя, который вносил ин-ю.');
            $table  -> integer('id_conf_simple_variable_pre') -> comment('Предыдущее изменение, записаное по данному id 56'.
                               '(в таблице id_conf_simple_variable_hist).');
            $table  -> timestamp('created_at')->nullable();
            $table  -> primary('id_conf_simple_variable');
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
