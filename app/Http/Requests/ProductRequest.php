<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:disponible,No-disponible'],
        ];
    }

    public function withValidator($validator)
   {
        $validator->after(function($validator){
            // antes de agregar el producto a la base de datos checamos condicion de error si
            // status este disponible y stock es = 0, nos dispare un mensaje de error
            if ($this->status == 'disponible' && $this->stock == 0) {
                $validator->errors()->add('stock', 'Si esta disponible tiene que tener un stock');
            }
        });
   }

}
