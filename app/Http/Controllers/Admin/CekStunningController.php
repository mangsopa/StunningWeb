<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stunning;
use Illuminate\Http\Request;

class CekStunningController extends Controller
{
    public function index()
    {
        $Stunnings = Stunning::all();
        return view('admin.stunnings.index', compact('Stunnings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-Laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'berat_badan' => 'required|string|max:255',
            'tinggi_badan' => 'required',
            'asupan_gizi' => 'required',
            'status_kesehatan' => 'required',
        ], [
            'name.required' => 'Nama harus diisi.',
            'gender.required' => 'Jenis Kelamin harus dipilih.',
            'gender.in' => 'Jenis Kelamin harus Laki-Laki atau Perempuan.',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong.',
            'tanggal_lahir.date' => 'Tanggal Lahir harus berupa tanggal yang valid.',
            'nama_ayah.required' => 'Nama Ayah harus diisi.',
            'nama_ibu.required' => 'Nama Ibu harus diisi.',
            'berat_badan.required' => 'Berat Badan harus diisi.',
            'tinggi_badan.required' => 'Tinggi Badan harus diisi.',
            'asupan_gizi.required' => 'Asupan Gizi harus diisi.',
            'status_kesehatan.required' => 'Status Kesehatan harus diisi.',
        ]);

        $daftar = Stunning::create($validated);

        if ($daftar) {
            return redirect()->route('admin.stunnings.index')->with('success', 'Data Stunning berhasil ditambahkan');
        } else {
            return redirect()->route('admin.stunnings.index')->withErrors(['error' => 'Menambahkan Stunning Gagal']);
        }
    }

    public function destroy($id)
    {
        $Bayis = Stunning::find($id);
    
        // Periksa apakah peran ditemukan
        if ($Bayis) {
            // Hapus peran
            $Bayis->delete();
    
            // Jika penghapusan berhasil, kembalikan respons yang sesuai
            return response()->json(['message' => 'Data Stunning deleted successfully'], 200);
        } else {
            // Jika peran tidak ditemukan, kembalikan respons yang sesuai
            return response()->json(['error' => 'Data Stunning not found'], 404);
        }
    }

    public function create() {
        return view('admin.stunnings.create');
    }
}
