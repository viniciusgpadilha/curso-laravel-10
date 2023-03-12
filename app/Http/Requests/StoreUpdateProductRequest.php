<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $id = $this->segment(2);

        return [
            'name'          => "required|min:3|max:255|unique:products,name,{$id},id",
            'description'   => 'required|min:3|max:2000',
            'price'         => 'required',
            'arquivo'       => 'nullable|image'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'         => 'Ops! Precisa informar o nome do produto!',
            'name.min'              => 'Ops! Precisa informar, pelo menos, três caracteres',
            'description.required'  => 'Ops! Precisa informar a descrição do produto!',
            'description.min'       => 'Ops! Precisa informar, pelo menos, três caracteres',
            'price.required'        => 'Ops! Precisa informar o preço do produto!',
            'arquivo.required'      => 'Ops! Precisa enviar, pelo menos, uma imagem',
        ];
    }
}
