<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function userAccount(Request $req)
    {
        // Form Regex Validation
        $validator = Validator::make($req->all(), [
            'email_address' => 'required | email',
            'password' => 'nullable | confirmed',
            'firstname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'middlename' => 'nullable | alpha:ascii | min:3 | regex:/^\S+$/',
            'lastname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'birth_year' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'department' => 'required',
            'contact' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/ | min:7 | max:15',
            'house_lot_block_street' => 'required',
            'country' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'zip_code' => 'required | numeric',
        ]);

        //form condition validation
        if ($validator->fails()) {
            return redirect('/user-management/user-information/create')
            ->withErrors($validator)
            ->withInput();
        }

        //store records
        $acc = new User;
        $acc->email_address=$req->email_address;
        $acc->password=bcrypt($req->password);
        $acc->firstname=$req->firstname;
        $acc->middlename=$req->middlename;
        $acc->lastname=$req->lastname;
        $acc->birth_month=$req->birth_month;
        $acc->birth_day=$req->birth_day;
        $acc->birth_year=$req->birth_year;
        $acc->age=$req->age;
        $acc->gender=$req->gender;
        $acc->role=$req->role;
        $acc->department=$req->department;
        $acc->contact=$req->contact;
        $acc->house_lot_block_street=$req->house_lot_block_street;
        $acc->country=$req->country;
        $acc->province=$req->province;
        $acc->municipality=$req->municipality;
        $acc->barangay=$req->barangay;
        $acc->zip_code=$req->zip_code;
        $acc->status="1";
        $acc->save();

        session()->flash('store-success', 'Form saved successfully!');

        return redirect()->back();
    }


    public function showRecords() {
        $data = User::all();
        $countData = DB::table('users')->count();
        $activeCount = User::where('status', 1)->count();
        $inactiveCount = User::where('status', 0)->count();

        // $page = DB::table('useraccounts')->paginate();

        return view('pages/user-management/user-information/index',
        [
            'data' => $data,
            'countData' => $countData,
            'activeCount' => $activeCount,
            'inactiveCount' => $inactiveCount,
        ]);
    }


    public function destroy(Request $req, User $useracc)
    {
        $useracc->delete();
        $req->session()->flash('deleted', 'User Deleted Successfully!');
        return redirect('/show-rec');
    }


    public function edit(string $useracc)
    {
        $acc = User::find($useracc);
        return view('pages.user-management.user-information.edit', compact('acc'));
    }


    public function editAuth(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required | email',
            'password' => 'nullable | min:6',
            'firstname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'middlename' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'lastname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'birth_year' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'contact' => 'required | phone:PH',
            'house_lot_block_street' => 'required',
            'country' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'zip_code' => 'required | numeric',
            // 'image' => 'nullable | mimes:jpg,png,jpeg',
        ]);
    
        if($validator->fails())
        {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
        }


        //image
        // if($req->image !== null) 
        // {
        //     $filename = $req->image->getClientOriginalName();
        //     $filesize = $req->image->getSize();
        //     $req->image->storeAs('public/', $filename);

            DB::table('users')->where('id', $req->useracc)->update([
                'name' => $req->firstname . " " . $req->middlename . " " . $req->lastname,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'firstname' => $req->firstname,
                'middlename' => $req->middlename,
                'lastname' => $req->lastname,
                'birth_month' => $req->birth_month,
                'birth_day' => $req->birth_day,
                'birth_year' => $req->birth_year,
                'age' => $req->age,
                'gender' => $req->gender,
                'role' => 'user',
                'department' => $req->department,
                'contact' => $req->contact,
                'house_lot_block_street' => $req->house_lot_block_street,
                'country' => $req->country,
                'province' => $req->province,
                'municipality' => $req->municipality,
                'barangay' => $req->barangay,
                'zip_code' => $req->zip_code,
                'status' => "1",
                // 'image_name' => $filename,
                // 'image_size' => $filesize,
                // 'image_location' => 'storage/' . $filename,
            ]);
        // }
        // else {
        //     DB::table('users')->where('id', $acc)->update([
        //         'name' => $req->firstname . " " . $req->middlename . " " . $req->lastname,
        //         'email' => $req->email,
        //         'password' => Hash::make($req->password),
        //         'firstname' => $req->firstname,
        //         'middlename' => $req->middlename,
        //         'lastname' => $req->lastname,
        //         'birth_month' => $req->birth_month,
        //         'birth_day' => $req->birth_day,
        //         'birth_year' => $req->birth_year,
        //         'age' => $req->age,
        //         'gender' => $req->gender,
        //         'role' => 'user',
        //         'department' => $req->department,
        //         'contact' => $req->contact,
        //         'house_lot_block_street' => $req->house_lot_block_street,
        //         'country' => $req->country,
        //         'province' => $req->province,
        //         'municipality' => $req->municipality,
        //         'barangay' => $req->barangay,
        //         'zip_code' => $req->zip_code,
        //         'status' => "1",
        //     ]);
        // }

        
        $req->session()->flash('success', 'User updated successfully');
        
        return redirect()->back();
    }
}
