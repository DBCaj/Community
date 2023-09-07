<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|unique:users|max:255',
            'password' => 'required | confirmed | min:6',
            'firstname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'middlename' => 'nullable | alpha:ascii | min:3 | regex:/^\S+$/',
            'lastname' => 'required | alpha:ascii | min:3 | regex:/^\S+$/',
            'birth_month' => 'required',
            'birth_day' => 'required',
            'birth_year' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'role' => 'required',
            'contact' => 'required | phone:PH',
            'house_lot_block_street' => 'required',
            'country' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'zip_code' => 'required | numeric',
            'image' => 'nullable | mimes:jpg,png,jpeg',
        ];
    }
}
