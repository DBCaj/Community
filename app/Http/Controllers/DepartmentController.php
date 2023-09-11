<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
  public function destroy(Request $req, string $dept)
    {
      $data = Department::find($dept);
      $department_name = $data->department;
      
      $user = Auth::user();
      $user->activity = "This user has just deleted a department called " . $department_name . ".";
      $user->save();
      
      $data->delete();
       
      $req->session()->flash('deleted', 'Department Deleted Successfully!');
      return redirect()->back();
    }
    
    
  public function editDepartmentAuth(Request $req, string $dept)
    {
        $department = Department::findOrFail($dept);

        $validator = Validator::make($req->all(), [
            'department' => 'required',
        ]);

        if($validator->fails())
        {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
        }
        
        $user = Auth::user();
        $user->activity = "This user has just updated a department name from " . $req->department . " to " . Str::of($req->department)->upper() . ".";
        $user->save();

        DB::table('departments')
        ->where('id', $dept)
        ->update([
            'department' => Str::of($req->department)->upper(),
        ]);

        $req->session()->flash('success', 'Department updated successfully!');
        
        return redirect()->back();    
    }
}
