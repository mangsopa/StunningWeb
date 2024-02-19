<?php

namespace App\Charts;

use App\Models\HistoryStunning;
use App\Models\Stunning;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;


class MonthlyUsersChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build($id)
    {
        // Ambil data riwayat berdasarkan id stunning tertentu
        $historyData = HistoryStunning::where('stunning_id', $id)
            ->get();

        // Siapkan array untuk menyimpan data yang akan digunakan dalam chart
        $beratBadanData = [];
        $tinggiBadanData = [];
        $tanggalData = [];

        // Loop melalui setiap entri riwayat
        foreach ($historyData as $history) {
            // Tambahkan data ke array sesuai dengan format yang diperlukan untuk chart
            $beratBadanData[] = $history->berat_badan;
            $tinggiBadanData[] = $history->tinggi_badan;
            $tanggalData[] = $history->created_at->format('d/m/Y'); // Ubah format tanggal sesuai kebutuhan
        }

        // Bangun chart menggunakan data yang telah diproses
        if (!empty($history))
            $stunning = Stunning::findOrFail($history->stunning_id);

        return  $this->chart->lineChart()
            ->setTitle('Nama : ' . $stunning->name)
            ->setSubtitle('History Stunnings')
            ->addData('Berat Badan', $beratBadanData)
            ->addData('Tinggi Badan', $tinggiBadanData)
            ->setXAxis($tanggalData) // Gunakan tanggal sebagai sumbu x
            ->setGrid('#3F51B5');
    }
}
