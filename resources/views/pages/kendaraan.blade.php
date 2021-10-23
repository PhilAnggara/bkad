@extends('layouts.app')
@section('title', 'BKAD Inventory - Data Kendaraan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Aset Kendaraan</h3>
    <button class="btn icon icon-left btn-success round" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
      <i class="fal fa-file-plus"></i>
      Tambah Aset
    </button>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-body">
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
                  <tr>
                    <td scope="row">
                      <button type="button" class="btn btn-sm icon btn-dark" data-toggle="modal" data-target="#qrModal-">
                        <i class="fal fa-qrcode" data-toggle="tooltip" title="Lihat QRCODE"></i>
                      </button>
                      KDR42100001
                    </td>
                    <td>Kijang Innova</td>
                    <td>R4</td>
                    <td>10 Sep 2021</td>
                    <td>
                      <span class="badge bg-success">Berfungsi</span>
                    </td>
                    <td>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn icon btn-info" data-toggle="modal" data-target="#detailModal-">
                          <i class="fal fa-eye" data-toggle="tooltip" title="Lihat Detail"></i>
                        </button>
                        <button type="button" class="btn icon btn-primary" data-toggle="modal" data-target="#editlModal-">
                          <i class="fal fa-edit" data-toggle="tooltip" title="Ubah"></i>
                        </button>
                        <button type="button" class="btn icon btn-danger" data-toggle="modal" data-target="#hapusModal-">
                          <i class="fal fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@include('includes.modal')
@endsection