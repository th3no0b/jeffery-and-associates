<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

use App\Rules\Phone;

class CreatePracticeRequest extends FormRequest {
    public function authorize () {
        return Auth::check();
    }

    public function rules () {
        return [
            'name'     => 'required|string|unique:practices,name',
            'phone'    => ['required', new Phone],
            'line1'    => 'required|string',
            'line2'    => 'nullable|string',
            'city'     => 'required|string',
            'county'   => 'required|string',
            'postcode' => 'required|string',
        ];
    }
}
