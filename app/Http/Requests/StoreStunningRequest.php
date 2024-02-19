<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStunningRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(['Laki-Laki', 'Perempuan'])], // contoh aturan validasi enum untuk gender
            'tanggal_lahir' => ['required', 'date'],
            'berat_badan' => ['nullable', 'numeric'],
            'tinggi_badan' => ['nullable', 'numeric'],
            'nama_ayah' => ['nullable', 'string', 'max:255'],
            'nama_ibu' => ['nullable', 'string', 'max:255'],
            'asupan_gizi' => ['nullable', Rule::in(['Terpenuhi', 'Tidak-Terpenuhi'])], // contoh aturan validasi enum untuk asupan gizi
            'status_kesehatan' => ['nullable', Rule::in([1, 0])], // contoh aturan validasi enum untuk status kesehatan
        ];
    }
}
