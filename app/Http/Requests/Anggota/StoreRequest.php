<?php

namespace App\Http\Requests\Anggota;

use App\Http\Requests\Request;
use App\Anggota;

class StoreRequest extends Request
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
            'nis' => 'Required',
            'nama' => 'Required',
            'kelas' => 'Required',
            'sex' => 'Required',
            'alamat' => 'Required',
            'telp' => 'Required',
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'Nis siswa tidak boleh kosong',
            'nama.required' => 'Nama Siswa tidak boleh kosong',
            'kelas.required' => 'Kelas tidak boleh kosong',
            'sex.required' => 'Jenis Kelamin tidak boleh kosong',
            'alamat.required' => 'Agama tidak boleh kosong',
            'telp.required' => 'No Telepon tidak boleh kosong',
        ];
    }
}
