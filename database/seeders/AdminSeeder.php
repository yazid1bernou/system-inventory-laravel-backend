<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Admin' ,
            'email' => 'admin@gmail.com' ,
            'phone' => '0558538485' ,
            'password' => Hash::make('123456') ,
            'role_id' => 1 ,
            
        ];

        User::create($data); 

    }
}
