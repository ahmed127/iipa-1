<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin;

class UpdateAdminRequest extends FormRequest
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
        $rules = Admin::$rules;
        $rules['email'] = $rules['email'].",id,".$this->route("admin");
        if (!request()->filled('password')) {
            $rules['password'] = '';
        }
        $rules['status'] =  'sometimes|in:0,1';
        return $rules;
    }
}
