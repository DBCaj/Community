<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'departments';

    protected $fillable = [
        'id', 
        'department',
    ];
    
    
    /////// One to One Relation - Start ///////
    public function user()
    {
      return $this->hasOne(User::class, 'department_id', 'id');
    }
    /////// One to One Relation - End ///////
}
