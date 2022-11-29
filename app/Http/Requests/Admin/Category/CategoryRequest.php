<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>" required|max:25|regex:/^[0-9A-Za-z.\s,'-]*$/",
        ];
    }


    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'name.required' => 'category name is required',
            'name.max' => 'category name must be 25 character',
            'name.regex'=>'name should be alphabetic characters'
            
        ];
    }
}
