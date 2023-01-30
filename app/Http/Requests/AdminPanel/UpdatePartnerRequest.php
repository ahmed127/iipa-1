<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Partner;

class UpdatePartnerRequest extends FormRequest
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
        $rules = Partner::$rules;
        $rules['logo'] = 'nullable|image|mimes:jpeg,jpg,png';

        return $rules;
    }
}
