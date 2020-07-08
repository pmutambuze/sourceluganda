<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchPaperRequest extends FormRequest
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
            'title' => 'required',
            'abstract' => 'required',
            'keywords' => 'required',
            'journal_id' => 'required',
            'authors_name' => 'required',
            'authors_email' => 'required',
            'address' => 'required',
            'country' => 'required',
            'organisation' => 'required',
            'mobile' => 'required',
            'viewers_name' => 'required',
            'viewers_email' => 'required',
            'total_words' => 'required',
            'package_id' => 'required',
        ];
    }
}
