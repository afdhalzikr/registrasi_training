<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $nama_kelas = ['Analyze', 'Programming', 'Design', 'IoT'];
       foreach ($nama_kelas as $key => $value){
           \App\Kelas::create([
               'id' => $key + 1,
              'nama_kelas' => $value
           ]);
       }
    }
}
