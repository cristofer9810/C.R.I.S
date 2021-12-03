<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReleaseRequest extends FormRequest
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

        $release = $this->route()->parameter('release');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:releases',
            'status' => 'required|in:1,2',
            'file' => 'image'

        ];
        if ($release) {
            $rules['slug'] = 'required|unique:releases,slug,'. $release->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'extract' => 'required',
                'body' => 'required'
            ]);
        }

        return $rules;
    }
}
