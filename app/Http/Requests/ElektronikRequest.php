<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElektronikRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_barang' => 'required|max:255',
            'jenis' => 'required|max:255',
            'gambar' => 'image',
            'tanggal_masuk' => 'required|date',
            'penanggung_jawab' => 'required|max:255',
            'status' => 'required|max:255'
        ];
    }
}
