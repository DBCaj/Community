<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    //temporary query builder
    public function temporaryQuery()
    {
        //insert
        // return DB::table('useraccounts')
        //     ->insert([
        //         'email_address' => 'elenawherman@rhyta.com',
        //         'password' => 'elenapass123',
        //         'firstname' => 'Elena',
        //         'middlename' => '',
        //         'lastname' => 'Herman',
        //         'birth_month' => 'july',
        //         'birth_day' => '5',
        //         'birth_year' => '1990', 
        //         'age' => '32',
        //         'gender' => 'female',
        //         'role' => 'user',
        //         'department' => 'SSA',
        //         'contact' => '097198021921',
        //         'house_lot_block_street' => 'elena st.',
        //         'country' => 'PH',
        //         'province' => '',
        //         'municipality' => '',
        //         'barangay' => '',
        //         'zip_code' => '2322',
        //         'status' => '1',
        //     ]);


        //update
        return DB::table('useraccounts')
            ->where('id', 5)
            ->update([
                'status' => "0",
            ]);
    }
}
