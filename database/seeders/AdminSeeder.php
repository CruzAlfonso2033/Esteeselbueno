<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    protected static ?string $password;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //
        $user = User::create([
            'name' => 'Admin',
            'email' => 'prueba@gmail.com',
            'apellido' => 'Doroteo',
            'edad' => '20',
            'RFC' => 'DORP2000',
            'Sueldo' => '2000',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            ]);
            $user->assignRole('admin');
    }
}
