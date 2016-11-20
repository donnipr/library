<?php

namespace App\Http\Requests\Pinjam;

use App\Http\Requests\Request;
use App\Pinjam;

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
            'anggota_id' => 'Required',
            'buku_id' => 'Required',
            'tgl_pinjam' => 'Required',
            'tgl_kembali' => 'Required',
            'status' => 'Required',
        ];
    }

    public function messages()
    {
        return [
            'anggota_id.required' => 'Peminjam tidak boleh kosong',
            'buku_id.required' => 'Buku tidak boleh kosong',
            'tgl_pinjam.required' => 'Tanggal Peminjaman tidak boleh kosong',
            'tgl_kembali.required' => 'Tanggal Pengembalian tidak boleh kosong',
            'status.required' => 'Status Peminjaman tidak boleh kosong',
        ];
    }
}
