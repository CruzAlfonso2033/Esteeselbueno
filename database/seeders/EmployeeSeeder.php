<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    protected static ?string $password;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'empleado',
            'email' => 'empleado@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('contraseña'),
            ]);
            $user->assignRole('employee');  
    }
}
