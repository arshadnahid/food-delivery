<?php

namespace App\Http\Requests;

use App\Traits\ApiResponses;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class RiderLocationRequest extends FormRequest
{
    use ApiResponses;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'rider_id' => 'required|integer|exists:riders,id',
            'service_name' => 'required|string',
            'lat' => 'required|numeric|between:-90,90',
            'long' => 'required|numeric|between:-180,180',
            'capture_time' => 'required|date',
        ];
    }
    public function messages()
    {
        return [
            'rider_id.exists' => 'Invalid Rider Id',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->sendErrors(__('apiResponse.validationError'), $validator->errors()));
    }
}
