<?php

namespace App\Helpers;

use App\Http\Responses\BaseResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class Helpers
{
    /**
     * @param Validator $validator
     */
    public function failedValidation(Validator $validator){
        $responseLib = new BaseResponse();
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json($responseLib->validationFailResponse($errors),
            Response::HTTP_BAD_REQUEST));
    }
}
