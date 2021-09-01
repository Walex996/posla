<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'parent_id' => 'nullable|exists:categories,id',
            'status' => 'required|boolean',
            'position' => 'nullable|integer|min:1|max:100'
        ];
        
        if($this->isMethod('post')){
            $rules['name'] = ['required','string', 'unique:categories'];
            
        }elseif($this->isMethod('put')){
            $rules['name'] = ['required','string'];
        }

        return $rules;
    }
}
