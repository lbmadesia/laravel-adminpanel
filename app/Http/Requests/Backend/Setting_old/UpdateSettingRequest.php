<?php

namespace App\Http\Requests\Backend\Setting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return accessAllow('edit-setting');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo.dimensions'     => 'Invalid logo - should be minimum 226*48',
            'favicon.dimensions'  => 'Invalid favicon - should be 16*16',
        ];
    }
}
