<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'booking_id' => 'required';
            'parking_id' => 'required';
            'email' => 'required';
            'choice_One_Name' => 'required';
            'optionOne' => 'required';
            'choice_Two_Name' => 'required';
            'optionTwo' => 'required';
            'choice_Three_Name' => 'required';
            'optionThree' => 'required';
        ];
    }
}
