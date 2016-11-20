<?php

namespace App\Http\Requests\Buku;

use App\Http\Requests\Request;
use App\Buku;

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
            'isbn' => 'Required',
            'judul' => 'Required',
            'desk' => 'Required',
            'pengarang_id' => 'Required',
            'penerbit_id' => 'Required',
            'jumlah' => 'Required',
            'thn_terbit' => 'Required',
            'rak_id' => 'Required',
        ];
    }

    public function messages()
    {
        return [
            'isbn.required' => 'Isbn Buku tidak boleh kosong',
            'judul.required' => 'Judul Buku Siswa tidak boleh kosong',
            'desk.required' => 'Deskripsi Buku tidak boleh kosong',
            'pengarang_id.required' => 'Pengarang Buku tidak boleh kosong',
            'penerbit_id.required' => 'Penerbit Buku tidak boleh kosong',
            'jumlah.required' => 'Jumlah Buku tidak boleh kosong',
            'thn_terbit.required' => 'Tahun Terbit Telepon tidak boleh kosong',
            'rak_id.required' => 'Lokasi Buku tidak boleh kosong',
        ];
    }
}
