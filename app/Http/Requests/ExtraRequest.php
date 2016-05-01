<?php

namespace Gummex\Http\Requests;

use Gummex\Http\Requests\Request;

class ExtraRequest extends Request
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
            'label' => 'required',
            'price' => 'required',
            'icon' => 'required',
        ];
    }
}
