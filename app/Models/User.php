<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table ='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'birth_month',
        'birth_day',
        'birth_year',
        'age',
        'gender',
        'role',
        'role_id',
        'department',
        'department_id',
        'contact',
        'house_lot_block_street',
        'country',
        'province',
        'municipality',
        'barangay',
        'zip_code',
        'status',
        'image_name',
        'image_size',
        'image_location',
        'last_activity',
        'activity',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin() {
        return $this->role == 'admin' || 'Admin';
    }


    public function getRoleAttribute($value)
    {
        return ucFirst($value);
    }
    
    
    public function getDepartmentAttribute($value)
    {
        return Str::of($value)->upper();
    }


    public function getFirstnameAttribute($value)
    {
        return ucFirst($value);
    }

    
    /////// One to One Relation - Start ///////
    public function departmentInfo()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    /////// One to One Relation - End ///////
    
    
    /////// One to One Relation - Start ///////
    public function roleInfo()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    /////// One to One Relation - End ///////
}
