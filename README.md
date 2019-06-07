# Laravel Method Form Request

This package helps you organize request validation data for Laravel form requests.

Instead of having multiple form request files for creating and updateing you can store both validation rules in the same file.

## Installation
Install as a composer dependency.

`composer require finalgamer/laravel-method-form-request`

## Usage

```php
<?php

namespace App\Http\Requests;

use LaravelMethodFormRequest\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function createRules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function updateRules(): array
    {
        return [
            'name' => 'string',
            'email' => 'email',
            'password' => 'string',
        ];
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function deleteRules(): array
    {
        // Also supports DELETE requests. Altough this is used very rarely.
        
        return [];
    }
}
```