<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     Schema::disableForeignKeyConstraints();
    //     Student::truncate();
    //     Schema::enableForeignKeyConstraints();

    //     $data = [
    //         ['name' => 'dayat','gender' => 'L', 'nis' => '10101','class_id' => 1],
    //         ['name' => 'sintyo','gender' => 'P', 'nis' => '10102','class_id' => 2],
    //         ['name' => 'Ibrahim','gender' => 'L', 'nis' => '10103','class_id' => 3],
    //         ['name' => 'Fatimah','gender' => 'P', 'nis' => '10104','class_id' => 4],
    //     ];

    //     foreach ($data as $value) {
    //         Student::insert([
    //             'name' => $value['name'] ,
    //             'gender' => $value['gender'],
    //             'nis' => $value['nis'],
    //             'class_id' => $value['class_id'],
    //             'created_at' =>Carbon::now(),
    //             'updated_at' =>Carbon::now()
    //         ]);
    //     }
    // }
    Student::factory()->count(20)->create();
    }
}
