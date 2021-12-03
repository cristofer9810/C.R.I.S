<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViewRequest extends FormRequest
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
        $view = $this->route()->parameter('view');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:views,slug,',
            'status' => 'required|in:1,2',
            'file' => 'image'
            // el file es para selecionar el tipo de archivo que recivimos en la vista

        ];

        if ($view) {
            $rules['slug'] = 'required|unique:views,slug,' . $view->id;
        }     

        return $rules;
    }
}
