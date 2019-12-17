<?php

use Illuminate\Database\Seeder;

class jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Annastasya Fitri Amalia R',
            'nim' => '18/425956/SV/15098'.
        ]);
    }
}
