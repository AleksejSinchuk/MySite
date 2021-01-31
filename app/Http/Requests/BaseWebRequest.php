<?php


namespace App\Http\Requests;


class BaseWebRequest extends  BaseRequest
{
    protected function failedValidation(Validator $validator)
    {
        // перенаправить куда нужно при ошибке валидации
      //  throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
