<?php

namespace App\Http\Requests\Penerbit;

use App\Http\Requests\Request;
use App\Penerbit;

class EditRequest extends Request
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
            'nama' => 'Required',
            'alamat' => 'Required',
            'telp' => 'Required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Penerbit tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'telp.required' => 'No Telpon tidak boleh kosong',
        ];
    }
}
