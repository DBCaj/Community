<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'Josh Montalban',
        'email' => 'josh123@gmail.com',
        'password' => Hash::make('joshpass123'),
        'firstname' => 'Josh',
        'lastname' => 'Montalban',
        'birth_month' => '1',
        'birth_day' => '2',
        'birth_year' => '1994',
        'age' => '29',
        'gender' => '1',
        'role' => 'admin',
        'department' => 'IT',
        'contact' => '09476247182',
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => '4190',
        'status' => "1",
      ]);
      
    }
}
