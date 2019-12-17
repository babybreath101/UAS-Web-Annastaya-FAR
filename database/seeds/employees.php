<?php

use Illuminate\Database\Seeder;

class employees extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'id_employees' => '123',
            'id_jobs' => '111',
            'name'=>"Annasatasya Fitri Amalia R",
            'email'=>'annastasyafar04@gmail.com',
            'phone'=>'08560467722',
            'address'=>'Jl Colombo Sleman'.
        ]);
    }
}
