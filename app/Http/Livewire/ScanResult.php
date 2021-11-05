<?php

namespace App\Http\Livewire;

use App\Models\Kendaraan;
use Livewire\Component;

class ScanResult extends Component
{
    public $term;
    public $status = "stand by";
    public $item;

    public function updatedTerm()
    {
        if (empty($this->term)) {
            $this->status = "stand by";
        } else {
            $this->item = Kendaraan::where('kode_barang', $this->term)->first();
            
            if ($this->item) {
                $this->status = "found";
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
