<?php

namespace App\Http\Requests;

use App\Models\Kendaraan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreKendaraanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('kendaraan_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'description' => [
                'nullable',
            ],
            'mesin' => [
                'nullable',
            ],
            'fitur' => [
                'nullable',
            ],
            'price' => [
                'nullable',
                'string',
            ],
        ];
    }
}
