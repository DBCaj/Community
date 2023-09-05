<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
  public function destroy(Request $req, string $dept)
    {
      $data = Department::find($dept);
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

        DB::table('departments')
        ->where('id', $dept)
        ->update([
            'department' => Str::of($req->department)->upper(),
        ]);

        $req->session()->flash('success', 'Department updated successfully!');
        
        return redirect()->back();    
    }
}
