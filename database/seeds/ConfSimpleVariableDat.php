<?php

use Illuminate\Database\Seeder;
use Database\CommonAction;


class ConfSimpleVariableDat extends Seeder
{
    use CommonAction;

    private $tables      = ['conf_simple_variable', 'conf_simple_variable_hist'];

    private $f_id       = 'id_conf_simple_variable';
    private $f_name     = 'name';
    private $f_var      = 'variable';
    private $comment    = 'comment';
    private $f_type     = 'type';
    private $f_id_user  = 'id_user';
    private $f_id_pre   = 'id_conf_simple_variable_pre';

    private function add()
    {
        $variables = [
            'is_project_working' => [1,'int','1 - Сайт успешно работает; 0 - На ремонте'],
            'language_def'       => ['by','str','Язык по умолчанию'],
            'language_all'       => ['ru,by','arr','Список всех языков']
        ];

        foreach ($variables as $name => $var_arr) {
            $variable = $var_arr[0];
            $type     = $var_arr[1];
            $comment  = $var_arr[2];

            $values[] = [
                $this->f_name   =>  $name,
                $this->f_var    =>  $variable,
                $this->f_type   =>  $type,
                $this->comment  =>  $comment,
                $this->f_id_user=>  1
            ];
        }

        foreach ($this -> tables as $table){
            DB::table($table)->insert($values);
        }
    }

}
