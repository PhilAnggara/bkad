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
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-6">
                <video id="preview" width="100%"></video>
              </div>
              <div class="col-12 col-md-6">
                <div class="input-group mb-3">
                  <span class="input-group-text">Kode Barang</span>
                  <input type="text" id="kodeBarang" class="form-control" placeholder="Pindai ato masukan kode barang" autofocus>
                </div>
                <img src="{{ Storage::url('gambar/example/example.jpg') }}" class="img-fluid img-thumbnail my-1">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered mb-0">
                    <tbody>
                      <tr>
                        <td>Merk</td>
                        <th>
                          Kijang Innova
                        </th>
                      </tr>
                      <tr>
                        <td>Jenis</td>
                        <th>R4</th>
                      </tr>
                      <tr>
                        <td>No Polisi</td>
                        <th>DB 0303 CE</th>
                      </tr>
                      <tr>
                        <td>Tanggal Masuk</td>
                        <th>3 September 2019</th>
                      </tr>
                      <tr>
                        <td>Penanggung Jawab</td>
                        <th>Yonatan Sarese</th>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <th class="text-center">
                          <span class="badge bg-success">Berfungsi</span>
                        </th>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
  scanner.addListener('scan', function (content) {
    console.log(content);
    document.getElementById('kodeBarang').value=content;
  });
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });
</script>
@endpush