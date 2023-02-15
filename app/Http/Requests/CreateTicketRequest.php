<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTicketRequest extends FormRequest
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
            'title'=>['required','string'],
            'text_description'=>['required'],
            'priority'=>['required','string'],
            'label'=>['required','exists:labels,id'],
            'category'=>['required','string'],
            'user_id'=>['required','string'],
            'ticket_image'=>['mimes:jpeg,png,jpg,gif,svg','max:2048'],

    
        ];
    }


public function messages()
{
    return [
        'title.required' => 'A title is required',
        'text_description.required'=>'Message body required',
        'priority.required' => 'Select priority',
        'ticket_image.mimes' =>'Uploaded file type error',
    ];
}



}