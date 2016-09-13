<?php

use Illuminate\Database\Seeder;

class ConfSimpleVariables extends Seeder
{
    private $table_name      = 'conf_simple_variable';
    private $table_name_hist = 'conf_simple_variable_hist';

    private $f_id       = 'id_conf_simple_variable';
    private $f_name     = 'name';
    private $f_var      = 'variable';
    private $f_type     = 'type';
    private $f_id_user  = 'id_user';
    private $f_id_pre   = 'id_conf_simple_variable_pre';

    public function run()
    {
        //name,var
        $variables = [
          'is_project_working'  => 1,
          'language'            => 'ru'
        ];


        //$this->setVariable(1,2);
        /*DB::table($this->table_name)->insert([

            [$this  ->  f_id     => 1,
             $this  ->  f_descr  => 'Полный бан'],
            [$this  ->  f_id     => 2,
             $this  ->  f_descr  => 'Бан чата']
        ]);

        DB::table($this ->  table_name_hist)->insert([
            [   $this  ->  f_id     => 1,
                $this  ->  f_descr  => 'Полный бан'],
            [   $this  ->  f_id     => 2,
                $this  ->  f_descr  => 'Бан чата']
        ]);*/
    }

    private function setVariable($name, $variable){

        return;
    }
}
