<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDealRequest extends FormRequest
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
        if($this->stage == 'info'){
            return [
                'title' => 'required|min:5',
                // 'freelancer_id' => 'required|exists:users,id',
                'category_id' => 'required|exists:categories,id',
                'subcategory_id' => 'required|exists:categories,id',
                'description' => 'required|min:20',
                'tags' => 'required',
                'deal_pictures' => 'required|array',
                'status' => 'required'

            ];
        }
        elseif($this->stage == 'pricing'){
            return [];
        }
        elseif($this->stage == 'requirement'){
            return [];
        }elseif($this->stage == 'publish'){
            return [];
        }

        
    }
}
