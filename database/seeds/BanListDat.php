<?php
use Illuminate\Database\Seeder;
use Database\CommonAction;

class BanListDat extends Seeder
{
    use CommonAction;

    private $tables = ['ban_list_type'];

    private $f_descr    = 'description';
    private $f_id       = 'id_ban_list_type';

    private function add(){
        $table = DB::table($this->tables[0]);
        $values = [
            [$this->f_id     => 1,
             $this->f_descr  => 'Полный бан'],
            [$this->f_id     => 2,
             $this->f_descr  => 'Бан чата']
        ];

        $table->insert($values);
    }
}
