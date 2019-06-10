<?php


namespace App\Http\Controllers\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ];
    }
}