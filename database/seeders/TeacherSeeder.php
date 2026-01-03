<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        Teacher::create(attributes: [
            'teacherName'  => 'Sok Dara',
            'gender'       => 'Male',
            'DOB'          => '1990-05-12',
            'salary'       => 1200.00,
            'subject'      => 'Mathematics',
            'phoneNumber'  => '012345678',
            'group'        => 'A1',
        ]);

        Teacher::create([
            'teacherName'  => 'Chan Sreyneang',
            'gender'       => 'Female',
            'DOB'          => '1995-09-20',
            'salary'       => 1100.00,
            'subject'      => 'English',
            'phoneNumber'  => '098765432',
            'group'        => 'B2',
        ]);

        Teacher::create([
            'teacherName'  => 'Phan Vireak',
            'gender'       => 'Male',
            'DOB'          => '1988-03-15',
            'salary'       => 1300.00,
            'subject'      => 'Physics',
            'phoneNumber'  => '017123456',
            'group'        => 'C1',
        ]);

        Teacher::create([
            'teacherName'  => 'Chea Rattanak',
            'gender'       => 'Male',
            'DOB'          => '1992-07-08',
            'salary'       => 1250.00,
            'subject'      => 'Chemistry',
            'phoneNumber'  => '016987654',
            'group'        => 'A2',
        ]);

        Teacher::create([
            'teacherName'  => 'Lyna Phally',
            'gender'       => 'Female',
            'DOB'          => '1994-11-22',
            'salary'       => 1150.00,
            'subject'      => 'Biology',
            'phoneNumber'  => '015234567',
            'group'        => 'B1',
        ]);
    }
}
