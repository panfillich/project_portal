<?php
namespace Database;

use Illuminate\Support\Facades\DB;

Trait CommonAction
{
    //$this->tables it's array of names of tables
    private function start_work(){
        $tables = $this->tables;
        $count = count($tables);
        switch(true){
            case $count == 1:
                $str = 'Table';
                $str_table = $tables[0];
                break;
            case $count > 1:
                $str = 'Tables';
                $str_table = implode(', ',$tables);
                break;
            default:
                $this->command->info("ERROR: (count(table_arr) == 0) || (-/- == NULL)");
        }
        $this->command->info($str.': '.$str_table.':');
    }

    private function truncate_all()
    {
        $tables = $this->tables;
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        $this->command->info('Truncating was successful.');
    }

    public function run()
    {
        $this -> start_work();
        $this -> truncate_all();
        $this -> add();
        $this -> command -> info('Truncating was successful.');
    }
}
