<?php

namespace App\Http\Services;

use App\Exceptions\CustomValidationException;
use Illuminate\Support\Facades\Validator;

class BaseService
{
    public function validate($data, $rules, $messages = [])
    {
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails())
            throw new CustomValidationException($validator);
    }
}
