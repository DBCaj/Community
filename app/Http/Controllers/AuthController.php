<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
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
          $user->save();
          
          $req->session()->put('user', $req->input('email'));
          return redirect()->intended('/dashboard');
        }
        elseif(Auth::attempt(['email' => $req->email, 'password' => $req->password, 'status' => 0]))
        {
          return back()
            ->withErrors([
              'invalid' => 'Account Inactive. Please contact customer support.',
              ])
            ->withInput();
        }
        else {
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
    $validator = Validator::make($req->all(), (new UserValidationRequest)->rules());
    
    if($validator->fails())
    {
      return redirect()->back()
      ->withErrors($validator)
      ->withInput();
    }


    //image
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
      'department' => $req->department,
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
}