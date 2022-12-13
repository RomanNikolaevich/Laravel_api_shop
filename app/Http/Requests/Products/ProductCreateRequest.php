<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'code'        => 'required|min:3|max:255|unique:products,code',
            'name'        => 'required|min:3|max:255',
            'description' => 'required|min:5',
            'price'       => 'required|numeric|min:1',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'image',
        ];
    }

    public function messages():array
    {
        return [
            'required'             => 'Поле :attribute обязательно для ввода',
            'min'                  => 'Поле :attribute должно иметь минимум :min символов',
            'max'                  => 'Поле :attribute должно иметь минимум :max символов',
            'unique'               => 'Такая запись уже есть в базе данных',
            'price.numeric'        => 'Поле price должно содержать только числова',
            'price.min'            => 'Поле price должно содержать не менее :min символов',
            'exists:categories,id' => 'Указанная категория отсутствует в базе данных',
            'image'                => 'Поле предназначено только для изображений',
        ];
    }
}
