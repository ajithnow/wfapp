<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $form = [
            [
               'fname'=>'Admin',
               'lname'=>'Admin',
               'email'=>'admin@me.com',
                'dob'=>'2011-08-01',
               'user_id'=> 2,
               'status_id'=>1,
            ],
            [
                'fname'=>'user',
               'lname'=>'user',
               'email'=>'user@me.com',
                'dob'=>'2011-08-01',
               'user_id'=> 2,
               'status_id'=>2,
            ],
            [
                'fname'=>'user',
               'lname'=>'user',
               'email'=>'user@me.com',
                'dob'=>'2011-08-01',
               'user_id'=> 1,
               'status_id'=>2,
            ],
        ];
  
        foreach ($form as $key => $value) {
            Form::create($value);
        }
    }
}
