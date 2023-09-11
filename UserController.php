<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function userAccount(Request $req)
    {
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
            'image' => 'nullable | mimes:jpg,png,jpeg',
        ]);

        if ($validator->fails()) {
            return redirect('/user-management/user-information/create')
            ->withErrors($validator)
            ->withInput();
        }

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
        $countData = User::whereNull('deleted_at')->count();
        $activeCount = User::where('status', 1)->count();
        $inactiveCount = User::where('status', 0)->count();


        return view('pages.user-management.user-information.index',
        [
            'data' => $data,
            'countData' => $countData,
            'activeCount' => $activeCount,
            'inactiveCount' => $inactiveCount,
        ]);
    }



    public function departmentsPage() {
        $countData = Department::whereNull('deleted_at')->count();
      
        $departments = Department::all();
        
        $activeDepartmentsCount = 0;
        $inactiveDepartmentsCount = 0;
        
        foreach($departments as $department)
        {
          // Count all users in the department (active and inactive)
        $userCount = User::where('department_id', $department->id)->count();
        // Store the user count in the department object
        $department->userCount = $userCount;
          
          //checks if department_id also exist in departments table
          //checks user status active count. 
          $activeUserCount = User::where('department_id', $department->id)
            ->where('status', '1')
            ->count();
            
          $inactiveUserCount = User::where('department_id', $department->id)
            ->where('status', '0')
            ->count();
           
          $department->status = $activeUserCount > 0 ? 'Active' : 'Inactive';
          
          // Update the counts of active and inactive departments
          if ($department->status === 'Active') {
              $activeDepartmentsCount++;
          } else {
              $inactiveDepartmentsCount++;
          }
        }
        
        return view('pages.user-management.department.index', compact('departments', 'countData', 'activeDepartmentsCount', 'inactiveDepartmentsCount'));
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
        $departments = Department::all();
        return view('pages.user-management.user-information.edit', compact('acc', 'departments'));
    }


    public function editAuth(Request $req)
    {
        $departments = Department::all();

        // $user = User::findOrFail($req->useracc);

        $validator = Validator::make($req->all(), [
            'email' => 'nullable',
            'password' => 'nullable | confirmed | min:6',
            'firstname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'middlename' => 'nullable | alpha:ascii | min:3 | regex:/^\S+$/',
            'lastname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'birth_year' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'age' => 'nullable',
            'status' => 'required',
            'role' => 'required',
            'contact' => 'required | phone:PH',
            'house_lot_block_street' => 'required',
            'country' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'zip_code' => 'required | numeric',
            'image' => 'nullable | mimes:jpg,png,jpeg',
        ]);


        if($validator->fails())
        {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
        }


        //this foreach is used to save department id
        foreach ($departments as $department) {
          //checks department input value in department table
          $department = Department::where('department', $req->department)->first();
  
          if ($department) {
            if ($req->image !== null)
              $filesize = $req->image->getSize();
              $filesize = $req->image->getSize();
              $req->image->storeAs('public/', $filename);            $req->image->storeAs('public/', $filename);
            DB::table('users')
            ->where('id', $req->useracc)
            ->update([
                'email' => $req->email,
                'name' => $req->firstname . " " . $req->middlename . " " . $req->lastname,
                'password' => Hash::make($req->password),
                'firstname' => $req->firstname,
                'middlename' => $req->middlename,
                'lastname' => $req->lastname,
                'birth_month' => $req->birth_month,
                'birth_day' => $req->birth_day,
                'birth_year' => $req->birth_year,
                'age' => $req->age,
                'gender' => $req->gender,
                'role' => $req->role,
                'role_id' => $req->role == 'Admin' || $req->role == 'admin' ? '1' : '2',
                'department' => $req->department,
                'department_id' => $department->id,
                'contact' => $req->contact,
                'house_lot_block_street' => $req->house_lot_block_street,
                'country' => $req->country,
                'province' => $req->province,
                'municipality' => $req->municipality,
                'barangay' => $req->barangay,
                'zip_code' => $req->zip_code,
                'status' => $req->status,
    
                // TEST
                'image_name' => $filename,
                'image_size' => $filesize,
                'image_location' => 'storage/' . $filename,
            ]);
            
            DB::table('users')->where('id', $req->current_user_id)->update([
              'activity' => 'This user has just edited user detail.',
              ]);
              
            $req->session()->flash('success', 'User updated successfully');
        
            return redirect()->back();  
          }
          else {
            
          }
          else {
            return "Error Occurred";
          }
        }
    }


    public function saveDepartment(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'department' => 'required | regex:/^[A-Za-z\s]+$/u | max: 255',
        ]);
    
        if($validator->fails())
        {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
        }

        if(Department::where('department', Str::of($req->department)->upper())->first())
        {
          $req->session()->flash('exist', 'Department already exist. Please try another one');
          
          return redirect()->back();
        }
        else {
          Department::create([
            'department' => Str::of($req->department)->upper(),
            ]);
          $req->session()->flash('success', 'Department added successfully');
          return redirect()->back();
        }
    }
    
    
    public function addUserForm()
    {
      $departments = Department::all();
      return view('pages.user-management.user-information.create', compact('departments'));
    }
}
