<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,3)->create();
        App\User::create([
            'name'=>'stivenlovera',
            'email'=>'stivenlovera@gmail.com',
            'password'=>bcrypt(123)
        ]); 
    }
}
