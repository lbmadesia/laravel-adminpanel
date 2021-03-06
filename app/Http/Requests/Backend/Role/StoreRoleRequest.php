<?php

namespace App\Http\Requests\Backend\Role;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return accessAllow('store-role');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $permissions = '';

        if ($this->associated_permissions != 'all') {
            $permissions = 'required';
        }

        return [
            'name'          => 'required|max:191',
            'permissions'   => $permissions,
        ];
    }

    public function messages()
    {
        return [
            'permissions.required' => 'You must select at least one permission for this role.',
        ];
    }
}
