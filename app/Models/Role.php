<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    
    protected $table='roles';
    
    protected $fillable = [
      'id',
      'role',
      ];
      
      
    /////// One to One Relation - Start ///////
    public function user()
    {
      return $this->hasOne(User::class, 'role_id', 'id');
    }
    /////// One to One Relation - End ///////
}
