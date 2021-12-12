@extends('layouts.app')
@section('title', 'BKAD Inventory - Pindai QR Code')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Pindai QR Code</h3>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-body p-1 p-md-3">
            <div class="row">

              <div class="btn-group btn-group-sm btn-group-toggle mb-5" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="radio" name="options" value="1" autocomplete="off" checked> Kamera Depan
                </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" value="2" autocomplete="off"> Kamera Belakang
                </label>
              </div>
              
              <div class="col-12 col-md-6">
                <video id="preview" width="100%"></video>
              </div>
              <div class="col-12 col-md-6">

                @livewire('scan-result')
                
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@endsection

@push('prepend-script')
<script type="text/javascript">
  var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
  scanner.addListener('scan', function (content) {
    console.log(content);
    document.getElementById('kodeBarang').value=content;
    document.getElementById('kodeBarang').dispatchEvent(new Event('input'));
  });
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
      $('[name="options"]').on('change', function () {
        if ($(this).val() == 1) {
          if (cameras[0] != "") {
            scanner.start(cameras[0]);
          } else {
            alert('No Front camera found!');
          }
        } else if ($(this).val() == 2) {
          if (cameras[1] != "") {
            scanner.start(cameras[1]);
          } else {
            alert('No Back camera found!');
          }
        }
      });
    } else {
      console.error('No cameras found.');
      alert('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });
</script>
@endpush