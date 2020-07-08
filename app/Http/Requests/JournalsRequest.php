<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JournalsRequest extends FormRequest
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
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'sample_image_path' => 'nullable',
            'publishing_date' => 'sometimes|required',
            'publishing_fee' => 'sometimes|required',
            'frequency' => 'sometimes|required',
            'guidelines' => 'nullable',
            'payment_policy' => 'nullable',
            'loyality_reward' => 'nullable',
            'plagiarism' => 'nullable',
            'academic_misconduct' => 'nullable',
            'layout' => 'nullable',
        ];
    }
}
