<?php

namespace App\Http\Controllers\Admin;

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStunningRequest;
use App\Models\HistoryStunning;
use App\Models\Stunning;
use Illuminate\Http\Request;

class CekIndicatorsControllers extends Controller
{
    public function index($id, MonthlyUsersChart $chart)
    {
        return view('admin.stunnings.indicators.index', ['chart' => $chart->build($id)]);
    }

    public function update(StoreStunningRequest $request, $id)
    {
        $stunningIndicator = Stunning::find($id);

        if ($stunningIndicator) {
            // Cek apakah ada perubahan pada berat badan atau tinggi badan
            $isBeratBadanChanged = $stunningIndicator->berat_badan != $request->berat_badan;
            $isTinggiBadanChanged = $stunningIndicator->tinggi_badan != $request->tinggi_badan;
        
            // Update data pada model Stunning
            $updateData = [
                'name' => $request->name,
                'gender' => $request->gender,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'berat_badan' => $request->berat_badan,
                'tinggi_badan' => $request->tinggi_badan,
                'asupan_gizi' => $request->asupan_gizi,
                'status_kesehatan' => $request->status_kesehatan,
            ];
        
            // Lakukan update pada model Stunning
            if ($stunningIndicator->update($updateData)) {
                // Jika ada perubahan pada berat badan atau tinggi badan, simpan ke dalam riwayat
                if ($isBeratBadanChanged || $isTinggiBadanChanged) {
                    $history = new HistoryStunning;
                    $history->stunning_id = $stunningIndicator->id;
                    $history->berat_badan = $stunningIndicator->berat_badan;
                    $history->tinggi_badan = $stunningIndicator->tinggi_badan;
                    $history->save();
                }
        
                return redirect()->route('admin.stunnings.index')->with('success', 'Data Stunning berhasil diperbarui');
            } else {
                return redirect()->route('admin.stunnings.index')->withErrors(['error' => 'Gagal memperbarui data Stunning.']);
            }
        } else {
            return redirect()->route('admin.stunnings.index')->withErrors(['error' => 'Stunning tidak ditemukan.']);
        }
        
    }
}
