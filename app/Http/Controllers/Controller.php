<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generateKodeBarang($collection, $data, $prefix)
    {
        $type = Str::upper(Str::substr($data['jenis'], 0, 2));
        $year = Carbon::parse($data['tanggal_masuk'])->isoFormat('YY');

        if ($collection->isEmpty()) {
            $tail = '00001';
        } else {
            $tail = Str::padLeft($collection->last()->id + 1, 5, 0);
        }

        $kodeBarang = $prefix. $type. $year. $tail;

        return $kodeBarang;
    }
}
