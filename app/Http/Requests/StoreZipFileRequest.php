<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreZipFileRequest extends FormRequest
{

    public $validator = null;

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
            'file' => 'required|file|mimes:zip|max:10240' //<- Limited to 10mb for the time being.
        ];
    }

    // Assign the validator interface upon a failed validation.
    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }
}
