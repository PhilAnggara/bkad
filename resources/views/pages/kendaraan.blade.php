@extends('layouts.app')
@section('title', 'BKAD Inventory - Data Kendaraan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Aset Kendaraan</h3>
    @if (auth()->user()->level == 'Admin')
      <button class="btn icon icon-left btn-success round" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
        <i class="fal fa-file-plus"></i>
        Tambah Aset
      </button>
    @endif
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            @if($errors->any())
              <div class="alert alert-danger">
                <p><strong>Ups ada yang tidak beres</strong></p>
                @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
              </div>
            @endif
            <div class="table-responsive">
              <table class="table table-hover border text-center text-nowrap" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Merk</th>
                    <th scope="col" width="100px">Jenis</th>
                    <th scope="col" width="100px">Tanggal Masuk</th>
                    <th scope="col" width="100px">Status</th>
                    <th scope="col" width="100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                  <tr>
                    <td scope="row">
                      <button type="button" class="btn btn-sm icon btn-dark" data-bs-toggle="modal" data-bs-target="#qrModal-{{ $item->id }}">
                        <i class="fal fa-qrcode" data-toggle="tooltip" title="Lihat QR Code"></i>
                      </button>
                      {{ $item->kode_barang }}
                    </td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ Carbon\Carbon::parse($item->tanggal_masuk)->isoFormat('D MMM YYYY') }}</td>
                    <td>
                      <span class="badge bg-{{ $item->status == 'Berfungsi' ? 'success' : 'danger' }}">{{ $item->status }}</span>
                    </td>
                    <td>
                      @if (auth()->user()->level == 'Admin')
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                          <button type="button" class="btn icon btn-info" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $item->id }}">
                            <i class="fal fa-eye" data-toggle="tooltip" title="Lihat Detail"></i>
                          </button>
                          <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id }}">
                            <i class="fal fa-edit" data-toggle="tooltip" title="Ubah"></i>
                          </button>
                          <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ $item->id }}">
                            <i class="fal fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>
                          </button>
                        </div>
                      @else
                        <button type="button" class="btn icon icon-left btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detailModal-{{ $item->id }}">
                          <i class="fal fa-eye"></i>
                          Lihat Detail
                        </button>
                      @endif
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@include('includes.modal.kendaraan-modal')
@endsection