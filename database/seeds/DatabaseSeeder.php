<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //php artisan make:seeder BanListType
        $this -> call(BanListDat::class);
        $this -> call(ConfSimpleVariableDat::class);

    }
}
