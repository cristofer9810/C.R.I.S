<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

        $crud_user = $this->route()->parameter('crud_user');

        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users',
            'telephone' => 'required',
            'address' => 'required',
            'cargo' => 'required',
            'status' => 'required|in:1,2',
            'color' => 'required',
        ];

        if ($crud_user) {
            $rules['email'] = 'required|unique:users,email,'. $crud_user->id;
        }

        return $rules;
    }
    
}
