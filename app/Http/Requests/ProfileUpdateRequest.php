<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255',  'regex:/^[a-zA-Z0-9]+$/'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            // 'address' => ['string', 'max:255', 'regex:/^[a-zA-Z0-9\s\.,#-]+$/', null],
            // 'ward' => ['string', 'max:255',],
            // 'distrist' => ['string', 'max:255',],
            // 'city' => ['string', 'max:255',],
            'phone' => ['string', 'min:10', 'max:10', 'regex:/^[0-9]+$/'],
            // 'fullname' => ['string', 'max:255'],
        ];
    }
}
