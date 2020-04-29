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
    public function rules() {
        return[
            'firstName' => 'required|min:2|max:30',
            'username' => 'required|min:2|max:30',
            'message' => 'required|min:5|max:256'
        ];
    }
    public function messages() {
        return [
            'firstName.required' => "First name is required",
            'firstName.min' => "Minimum 2 symbols in name!",
            'firstName.max' => "Maximum 30 symbols in name!",

            'username.required' => "Username is required",
            'username.min' => "Minimum 2 symbols in username!",
            'username.max' => "Maximum 30 symbols in username!",

            'message.required' => 'Message is required',
            'message.min' => "Minimum 5 symbols in message!",
            'message.max' => "Maximum 256 symbols in message!"
        ];
    }
}
