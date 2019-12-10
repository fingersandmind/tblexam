<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fname' => 'required|min:5|max:99',
            'lname' => 'required|min:5|max:99',
            'email' => 'required|email|min:5|max:99',
            'phone' => 'required|min:10|max:15'
        ];
    }
}
