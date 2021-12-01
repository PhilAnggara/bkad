<?php

namespace App\Http\Livewire;

use App\Models\Elektronik;
use App\Models\Furnitur;
use App\Models\Kendaraan;
use Livewire\Component;

class ScanResult extends Component
{
    public $term;
    public $status = "stand by";
    public $item;
    public $category;

    public function updatedTerm()
    {
        if (empty($this->term)) {
            $this->status = "stand by";
        } else {

            $kendaraan = Kendaraan::where('kode_barang', $this->term)->first();
            $elektronik = Elektronik::where('kode_barang', $this->term)->first();
            $furnitur = Furnitur::where('kode_barang', $this->term)->first();
            
            if ($kendaraan) {

                $this->item = $kendaraan;
                $this->status = "found";
                $this->category = 1;

            } elseif ($elektronik) {

                $this->item = $elektronik;
                $this->status = "found";
                $this->category = 2;

            } elseif ($furnitur) {

                $this->item = $furnitur;
                $this->status = "found";
                $this->category = 2;

            }
            else {
                $this->status= "not found";
            }
        }
    }

    public function render()
    {
        return view('livewire.scan-result', [
            'status' => $this->status,
            'item' => $this->item
        ]);
    }
}
