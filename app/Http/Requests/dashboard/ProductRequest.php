<?php

namespace App\Http\Requests\dashboard;

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
        if ($this->method() == 'POST') {
            return [
                'category'      => 'required|exists:categories,id',
                'agent'         => 'required',
                'name_ar'       => 'required|between:3,100|unique:products,name_ar',
                'name_en'       => 'required|between:3,100|unique:products,name_en',
                'desc_ar'       => 'required|between:3,1000',
                'desc_en'       => 'required|between:3,1000',
                'price'         => 'required|numeric|between:0,99999.999',
                'quantity'      => 'required|integer|between:0,9999999',
                'expire'        => 'required|date',
                'weight'        => 'required',
                'cost'          => 'required',
                'discount'      => 'nullable|numeric|between:0,99999.999',
                'discount_from' => 'nullable|date',
                'discount_to'   => 'nullable|date|after:discount_from',
                'images'        => 'required|array',
                'images.*'      => 'image|mimes:jpg,jpeg,png',
                'display'       => 'required|boolean',
                'deliverable'   => 'required|boolean',
            ];
        } else {
            return [
                'category'      => 'required|exists:categories,id',
                'agent'         => 'required',
                'name_ar'       => 'required|between:3,100|unique:products,name_ar,' . $this->route('product'),
                'name_en'       => 'required|between:3,100|unique:products,name_en,' . $this->route('product'),
                'desc_ar'       => 'required|between:3,1000',
                'desc_en'       => 'required|between:3,1000',
                'price'         => 'required|numeric|between:0,99999.999',
                'quantity'      => 'required|integer|between:0,9999999',
                'expire'        => 'required|date',
                'weight'        => 'required',
                'cost'          => 'required',
                'discount'      => 'nullable|numeric|between:0,99999.999',
                'discount_from' => 'nullable|date',
                'discount_to'   => 'nullable|date|after:discount_from',
                'images'        => 'nullable|array',
                'images.*'      => 'image|mimes:jpg,jpeg,png',
                'display'       => 'required|boolean',
                'deliverable'   => 'required|boolean',
            ];
        }
    }
}
