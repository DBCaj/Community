<?php

namespace App\Http\Controllers;

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
      $credentials = $req->only('email', 'password');
      
      if(Auth::attempt($credentials))
      {
        $req->session()->put('user', $req->input('email'));
        return redirect()->intended('/dashboard');
      }
      else {
        return back()
          ->withErrors([
            'invalid' => 'Invalid Credentials',
            ])
          ->withInput();
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
    
    
    // public function switchAccount(Request $req)
    // {
    //   if(Auth::user()->isAdmin())
    //   {
    //     $user = User::findOrFail($req->input('userId'));
    //     Auth::login($user);
    //     return redirect()->intended('/dashboard');
    //   }
    //   abort(403, 'UNAUTHORIZED ACTION');
    // }


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
      'image_name' => $filename,
      'image_size' => $filesize,
      'image_location' => 'storage/' . $filename,
    ]);
      

    $req->session()->flash('success', 'User added successfully');
    
    return redirect()->back();
  }
}