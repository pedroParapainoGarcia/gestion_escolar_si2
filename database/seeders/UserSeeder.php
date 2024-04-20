<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'administrador ',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('superAdmin');

        User::create([
            'name'=>'Luis Humerez',
            'email'=>'luis@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('Profesor');

        User::create([
            'name'=>'Zulma Rodriguez',
            'email'=>'zulma@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('Padre de Familia');

        User::create([
            'name'=>'kevi Vargas',
            'email'=>'kevin@gmail.com',
            'password'=>bcrypt('12345678'),
        ])->assignRole('Estudiante');
    }
}
