<?php

use Illuminate\Database\Seeder;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_kursus = ['Basic of Python', 'Basic of PHP', 'Basic of Javascript'];
        foreach ($nama_kursus as $key => $value){
            \App\Kursus::create([
                'id' => $key + 1,
                'nama_kursus' => $value,
                'kelas_id' => 2
            ]);
        }
    }
}
