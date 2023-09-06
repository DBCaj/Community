<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Database\Seeder;
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
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '1',
        'role' => 'admin',
        'role_id' => 1,
        'department' => 'IT',
        'department_id' => 1,
        'contact' => '0947624' . mt_rand(0001,9999),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "1",
      ]);
      
      
      User::create([
        'name' => 'Ellen Sanchez',
        'email' => 'ellen123@gmail.com',
        'password' => Hash::make('ellenpass123'),
        'firstname' => 'Ellen',
        'lastname' => 'Sanchez',
        'birth_month' => mt_rand(1,12),
        'birth_day' => mt_rand(1,29),
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '0',
        'role' => 'user',
        'role_id' => 2,
        'department' => 'SA',
        'department_id' => 2,
        'contact' => '0947624' . mt_rand(0101,9089),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "0",
      ]);
      
      
      User::create([
        'name' => 'Michael Angelo',
        'email' => 'michael123@gmail.com',
        'password' => Hash::make('michaelpass123'),
        'firstname' => 'Michael',
        'lastname' => 'Angelo',
        'birth_month' => mt_rand(1,12),
        'birth_day' => mt_rand(1,29),
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '1',
        'role' => 'admin',
        'role_id' => 1,
        'department' => 'Networking',
        'department_id' => 3,
        'contact' => '0947624' . mt_rand(0101,9089),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "1",
      ]);
      
      
      User::create([
        'name' => 'Alexandra Malkova',
        'email' => 'alexandra123@gmail.com',
        'password' => Hash::make('alexandrapass123'),
        'firstname' => 'Alexandra',
        'lastname' => 'Malkova',
        'birth_month' => mt_rand(1,12),
        'birth_day' => mt_rand(1,29),
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '0',
        'role' => 'admin',
        'role_id' => 1,
        'department' => 'Networking',
        'department_id' => 3,
        'contact' => '0947624' . mt_rand(0101,9089),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "0",
      ]);
      
      User::create([
        'name' => 'Manuel Santiago',
        'email' => 'manuel123@gmail.com',
        'password' => Hash::make('manuelpass123'),
        'firstname' => 'Manuel',
        'lastname' => 'Santiago',
        'birth_month' => mt_rand(1,12),
        'birth_day' => mt_rand(1,29),
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '1',
        'role' => 'user',
        'role_id' => 2,
        'department' => 'SA',
        'department_id' => 2,
        'contact' => '0947624' . mt_rand(0101,9089),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "0",
      ]);
      
      
      User::create([
        'name' => 'Judit Polgar',
        'email' => 'judit123@gmail.com',
        'password' => Hash::make('juditpass123'),
        'firstname' => 'Judit',
        'lastname' => 'Polgar',
        'birth_month' => mt_rand(1,12),
        'birth_day' => mt_rand(1,29),
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '0',
        'role' => 'admin',
        'role_id' => 1,
        'department' => 'IT',
        'department_id' => 1,
        'contact' => '0947624' . mt_rand(0101,9089),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "1",
      ]);
      
      
      User::create([
        'name' => 'Joana Santiago',
        'email' => 'joana123@gmail.com',
        'password' => Hash::make('joanapass123'),
        'firstname' => 'Joana',
        'lastname' => 'Santiago',
        'birth_month' => mt_rand(1,12),
        'birth_day' => mt_rand(1,29),
        'birth_year' => '19' . mt_rand(50,99),
        'age' => mt_rand(18,70),
        'gender' => '0',
        'role' => 'user',
        'role_id' => 2,
        'department' => 'HR',
        'department_id' => 4,
        'contact' => '0947624' . mt_rand(0101,9089),
        'house_lot_block_street' => 'test',
        'country' => 'PH',
        'province' => 'test',
        'municipality' => 'test',
        'barangay' => 'test',
        'zip_code' => mt_rand(1000,4900),
        'status' => "0",
      ]);
      
      
      Department::create([
        'department' => 'IT',
        ]);
      Department::create([
        'department' => 'SA',
        ]);
      Department::create([
        'department' => 'NETWORKING',
        ]);
      Department::create([
        'department' => 'HR',
        ]);
        
       
      Role::create([
        'role' => 'Admin',
        ]);
      Role::create([
        'role' => 'User',
        ]);
      
    }
}
