<?php

use Illuminate\Database\Seeder;

class BanListType extends Seeder
{
    private $table_name = 'ban_list_type';
    private $f_descr    = 'description';
    private $f_id       = 'id_ban_list_type';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->table_name)->insert([
           [$this->f_id     => 1,
            $this->f_descr  => 'Полный бан'],
           [$this->f_id     => 2,
            $this->f_descr  => 'Бан чата']
        ]);

    }
}
