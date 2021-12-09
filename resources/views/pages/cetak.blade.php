@extends('layouts.pdf')
@section('title', 'BKAD Inventory - Laporan')

@section('content')
<h1 class="mb">LAPORAN ASET KANTOR</h1>
<h1>BKAD KOTA BITUNG</h1>
<hr>
<p class="alamat">Jl. Sam Ratulangi No.45, Bitung Tengah, Maesa, Kota Bitung, Sulawesi Utara 95521</p>
<hr>

<h5 class="table-title">Aset Kendaraan</h5>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Kode Barang</th>
      <th>Merk</th>
      <th>Jenis</th>
      <th>Nomor Polisi</th>
      <th>Tanggal Masuk</th>
      <th>Penanggung Jawab</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($kendaraan as $k)
        <tr>
          <td>{{ $k->kode_barang }}</td>
          <td>{{ $k->merk }}</td>
          <td>{{ $k->jenis }}</td>
          <td>{{ $k->no_polisi }}</td>
          <td>{{ Carbon\Carbon::parse($k->tanggal_masuk )->isoFormat('D MMMM Y') }}</td>
          <td>{{ $k->penanggung_jawab }}</td>
          <td>{{ $k->status }}</td>
        </tr>
      @empty
      <tr>
        <td colspan="14" class="text-center">
          Data Kosong
        </td>
      </tr>
      @endforelse
  </tbody>
</table>

<h5 class="table-title">Alat Elektronik</h5>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Jenis</th>
      <th>Tanggal Masuk</th>
      <th>Penanggung Jawab</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($elektronik as $e)
        <tr>
          <td>{{ $e->kode_barang }}</td>
          <td>{{ $e->nama_barang }}</td>
          <td>{{ $e->jenis }}</td>
          <td>{{ Carbon\Carbon::parse($e->tanggal_masuk )->isoFormat('D MMMM Y') }}</td>
          <td>{{ $e->penanggung_jawab }}</td>
          <td>{{ $e->status }}</td>
        </tr>
      @empty
      <tr>
        <td colspan="14" class="text-center">
          Data Kosong
        </td>
      </tr>
      @endforelse
  </tbody>
</table>

<h5 class="table-title">Aset Furnitur</h5>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Jenis</th>
      <th>Tanggal Masuk</th>
      <th>Penanggung Jawab</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($furnitur as $f)
        <tr>
          <td>{{ $f->kode_barang }}</td>
          <td>{{ $f->nama_barang }}</td>
          <td>{{ $f->jenis }}</td>
          <td>{{ Carbon\Carbon::parse($f->tanggal_masuk )->isoFormat('D MMMM Y') }}</td>
          <td>{{ $f->penanggung_jawab }}</td>
          <td>{{ $f->status }}</td>
        </tr>
      @empty
      <tr>
        <td colspan="14" class="text-center">
          Data Kosong
        </td>
      </tr>
      @endforelse
  </tbody>
</table>

<table class="bawah" width="100%">
  <tr>
    <td></td>
    <td width="200px">
      <p class="tanggal">Bitung, {{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }}</p>
      <p class="jabatan">{{ Auth::user()->name }}</p>
      <p class="ttd">__________________________</p>
    </td>
  </tr>
</table>

{{-- <div class="page-break"></div> --}}
@endsection