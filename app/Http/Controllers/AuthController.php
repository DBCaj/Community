<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\User;

use App\Models\Department;
use App\Http\Requests\UserValidationRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
      if(session()->has('user'))
      {
        return redirect()->route('dashboard');
      }
      return view('login');
    }

  
    public function loginAuth(Request $req)
    { 
      try {

        //used for Auth::guard only  
        $credentials = [
          'email' => $req->email,
          'password' => $req->password,
          'status' => 1,
        ];  
        
        $remember = $req->has('remember');

        if(Auth::guard('web')->viaRemember())
        {
          //updates login_activity column
          $user = Auth::user();
          $user->last_activity = Carbon::now();
          $user->save();
          
          return redirect()->intended('/dashboard');
        }
        if(Auth::guard('web')->attempt($credentials, $remember))
        {
          //updates login_activity column
          $user = Auth::user();
          $user->last_activity = Carbon::now();
          
          $user->login_attempts = 0;
          
          $user->save();
          
          $req->session()->put('user', $req->input('email'));
          return redirect()->intended('/dashboard');
        }
        elseif(Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status' => 0]))
        {
          $user = Auth::user();
          $user->activity = "User tried to login but failed due to account is inactive.";
          $user->save();
          
          return back()
            ->withErrors([
              'invalid' => 'Account Inactive. Please contact customer support.',
              ])
            ->withInput();
        }
        elseif(Auth::attempt(['email' => $req->email, 'password' => $req->password]) == false)
        {
            $user = Auth::user();
        
            // Check if the user has a 'login_attempts' attribute, and if not, initialize it to 0
            if (!$user->login_attempts) {
                $user->login_attempts = 0;
            }
        
            // Increment the login attempts
            $user->login_attempts++;
            
            $user->activity = "User tried to login but failed due to invalid credentials.";
        
            // Save the updated login attempts count to the database
            $user->save();
        
            return back()
                ->withErrors([
                    'invalid' => 'Invalid Credentials',
                ])
                ->withInput();
        }

      } catch (\Exception $exception) {
          dd($exception->getMessage());
      } 
    }
    
    
  public function logout()
  {
    if(session()->has('user'))
    {
      session()->pull('user');
    }
    return redirect()->route('login.form');
  }
  
  
  public function dashboard()
  {
    $users = User::all();
    return view('pages.dashboard', compact('users'));
  }
    

  public function registerAuth(Request $req)
  {
    $departments = Department::all();

    $validator = Validator::make($req->all(), (new UserValidationRequest)->rules());
    
    if($validator->fails())
    {
      return redirect()->back()
      ->withErrors($validator)
      ->withInput();
    }


    foreach ($departments as $department) {
      $department = Department::where('department', $req->department)->first();

      if ($department) {
        if ($req->image !== null)
        {
          $filename = $req->image->getClientOriginalName();
          $filesize = $req->image->getSize();
          $req->image->storeAs('public/', $filename);

          User::create([
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
            'role' => $req->role,
            'role_id' => $req->role == 'Admin' || $req->role == 'admin' ? 1 : 2,
            'department' => $req->department,
            'department_id' => $department->id,
            'contact' => $req->contact,
            'house_lot_block_street' => $req->house_lot_block_street,
            'country' => $req->country,
            'province' => $req->province,
            'municipality' => $req->municipality,
            'barangay' => $req->barangay,
            'zip_code' => $req->zip_code,
            'status' => "1",
            'image_name' => $filename,
            'image_size' => $filesize,
            'image_location' => 'storage/' . $filename,
          ]);

          $req->session()->flash('success', 'User added successfully');
      
          return redirect()->back();
        }
        else {
          User::create([
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
            'role' => $req->role,
            'role_id' => $req->role == 'Admin' || $req->role == 'admin' ? 1 : 2,
            'department' => $req->department,
            'department_id' => $department->id,
            'contact' => $req->contact,
            'house_lot_block_street' => $req->house_lot_block_street,
            'country' => $req->country,
            'province' => $req->province,
            'municipality' => $req->municipality,
            'barangay' => $req->barangay,
            'zip_code' => $req->zip_code,
            'status' => "1",
          ]);

          $req->session()->flash('success', 'User added successfully');
      
          return redirect()->back();
        }
      }
      else {
        return "Error occurred";
      }
      
    }
  }
  
  
  public function create()
  {
    $departments = Department::all();
    return view('register', compact('departments'));
  }
}