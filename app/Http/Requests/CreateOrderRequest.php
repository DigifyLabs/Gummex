<?php

namespace Gummex\Http\Requests;

use Gummex\Http\Requests\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateOrderRequest extends Request
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
    public function rules()
    {
        return [
             'date' => 'required',
             'time' => 'required',
             'zip'  => 'required',
             'how_often' => 'in:once,season',
             'name' => 'required',
             'phone' => 'required',
             'email' => 'required|email',
             'address' => 'required',
             'total' => 'required|numeric',
             'payment_method_id' => 'required|exists:payment_methods,id',
        ];
    }

    public function response(array $errors)
    {
        return response()->json(['status'=>false,'errors'=>$errors]);
    }
}
