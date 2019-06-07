<?php

namespace LaravelMethodFormRequest;

use Illuminate\Foundation\Http\FormRequest as IlluminateFormRequest;

abstract class FormRequest extends IlluminateFormRequest
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
    public function rules(): array
    {

        switch ($this->method()) {
            case 'POST':
                return $this->createRules();

            case 'PUT':
            case 'PATCH':
                return $this->updateRules();

            case  'DELETE':
                return $this->deleteRules();

            default:
                return [];
        }
    }

    /**
     * DELETE request validation rules
     *
     * @return array
     */
    protected function deleteRules(): array
    {
        return [];
    }

    /**
     * POST request validation rules
     *
     * @return array
     */
    protected function createRules(): array
    {
        return [];
    }

    /**
     * PUT/PATCH request validation rules
     *
     * @return array
     */
    protected function updateRules(): array
    {
        return [];
    }
}