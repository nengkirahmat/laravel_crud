<?php

use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Pengguna = factory(\App\Pengguna::class, 10)->create();
    }
}
