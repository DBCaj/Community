<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;


class RoleController extends Controller
{
    public function rolesPage() {
        $roles = Role::all();
        
        foreach($roles as $role)
        {
          $userCount = User::where('role', $role->role)->count();
          $role->userCount = $userCount;
          
          $activeUserCount = User::where('role_id', $role->id)
              ->where('status', '1')
              ->count();
          $role->status = $activeUserCount > 0 ? 'Active' : 'Inactive';
        }
        return view('pages.user-management.roles.index', compact('roles'));
    }    
}
