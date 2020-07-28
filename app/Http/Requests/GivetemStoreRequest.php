<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GivetemStoreRequest extends FormRequest
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
            'title'     => 'required',
            'caption'   => 'required',
            'rating'    => 'required|integer',
            'pickup_location'   => 'required',
            'info'              => 'required',
            'tags'              => 'required',
        ];
    }
}
