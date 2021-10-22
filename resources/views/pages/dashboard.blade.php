@extends('layouts.app')
@section('title', 'BKAD Inventory')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Beranda</h3>
  </div>
  <section class="section mt-5">
    <div class="row mb-2">

      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Total Aset</h3>
                <div class="card-right d-flex align-items-center">
                  <i class="far fa-ballot-check fa-3x text-white"></i>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>350</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Kendaraan</h3>
                <div class="card-right d-flex align-items-center">
                  <i class="far fa-cars fa-3x text-white"></i>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>5</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Elektronik</h3>
                <div class="card-right d-flex align-items-center">
                  <i class="far fa-desktop fa-3x text-white"></i>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>70</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Furnitur</h3>
                <div class="card-right d-flex align-items-center">
                  <i class="far fa-couch fa-3x text-white"></i>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>135</h3>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>    
@endsection