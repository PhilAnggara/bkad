{{-- Modal Tambah Data --}}
<div class="modal fade text-left" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModal">
          Tambah Aset Kendaraan
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('kendaraan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" id="merk" class="form-control" name="merk" placeholder="Merk" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="jenis">Jenis Kendaraan</label>
                <select class="form-select" id="jenis" name="jenis" required>
                  <option selected disabled>-- Pilih Jenis Kendaraan --</option>
                  <option>R4</option>
                  <option>R2</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="no_polisi">Nomor Polisi</label>
                <input type="text" id="no_polisi" class="form-control" name="no_polisi" placeholder="Nomor Polisi" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" id="tanggal_masuk" class="form-control" name="tanggal_masuk" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="penanggung_jawab">Penanggung Jawab</label>
                <input type="text" id="penanggung_jawab" class="form-control" name="penanggung_jawab" placeholder="Penanggung Jawab" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-select" id="status" name="status" required>
                  <option selected disabled>-- Pilih Status Kendaraan --</option>
                  <option>Berfungsi</option>
                  <option>Rusak</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" id="gambar" class="form-control" name="gambar">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn icon icon-left btn-success">
            <i class="fal fa-plus"></i>
            Tambah Aset
          </button>
        </div>
      </form>

    </div>
  </div>
</div>


{{-- Modal QR Code --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="qrModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="qrModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title white" id="qrModal">
          {{ $item->kode_barang }}
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="d-flex justify-content-center">
          <img src="{{ Storage::url($item->qr) }}" class="img-fluid img-thumbnail mb-3">
        </div>
        <div class="text-center">
          <a class="btn icon icon-left btn-dark" href="{{ Storage::url($item->qr) }}" download>
            <i class="fal fa-download"></i>
            Unduh
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- Modal Detail --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="detailModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info white">
        <h5 class="modal-title white" id="detailModal">
          Detail Kendaraan
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        @if ($item->gambar)
          <img src="{{ Storage::url($item->gambar) }}" class="img-fluid img-thumbnail mb-3">
        @else
          <div class="border mb-2">
            <div class="text-center mt-3">
              <i class="fad fa-image fa-7x"></i>
            </div>
            <p class="text-center mt-2">Belum Ada Gambar</p>
          </div>
        @endif
        <div class="table-responsive">
          <table class="table table-hover table-bordered mb-0">
            <tbody>
              <tr>
                <td>Kode Barang</td>
                <th>{{ $item->kode_barang }}</th>
              </tr>
              <tr>
                <td>Merk</td>
                <th>{{ $item->merk }}</th>
              </tr>
              <tr>
                <td>Jenis</td>
                <th>{{ $item->jenis }}</th>
              </tr>
              <tr>
                <td>No Polisi</td>
                <th>{{ $item->no_polisi }}</th>
              </tr>
              <tr>
                <td>Tanggal Masuk</td>
                <th>{{ Carbon\Carbon::parse($item->tanggal_masuk)->isoFormat('D MMM YYYY') }}</th>
              </tr>
              <tr>
                <td>Penanggung Jawab</td>
                <th>{{ $item->penanggung_jawab }}</th>
              </tr>
              <tr>
                <td>Status</td>
                <th class="text-center">
                  <span class="badge bg-{{ $item->status == 'Berfungsi' ? 'success' : 'danger' }}">{{ $item->status }}</span>
                </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- Modal Edit --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="editModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title white" id="editModal">
          Edit Data Kendaraan
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        @if ($item->gambar)
          <img src="{{ Storage::url($item->gambar) }}" class="img-fluid img-thumbnail mb-3">
        @else
          <div class="border mb-2">
            <div class="text-center mt-3">
              <i class="fad fa-image fa-7x"></i>
            </div>
            <p class="text-center mt-2">Belum Ada Gambar</p>
          </div>
        @endif

        @if ($item->gambar)
          <form action="{{ route('delete-image', $item->id) }}" method="POST">
            @csrf
            <input type="hidden" name="category" value="1">
            @csrf
            <div class="d-flex justify-content-center">
              <button class="btn icon icon-left btn-sm btn-outline-danger" type="submit">
                <i class="fal fa-image"></i>
                Hapus Gambar
              </button>
            </div>
          </form>
        @endif

        <form action="{{ route('update-image', $item->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="category" value="1">
          <div class="form-group">
            @if ($item->gambar)
              <label for="gambar">Ganti Gambar</label>
            @else
              <label for="gambar">Tambah Gambar</label>
            @endif
            <div class="input-group mb-3">
              <input type="file" id="gambar" class="form-control" name="gambar" required>
              <button class="btn icon icon-left btn-outline-primary" type="submit">
                <i class="fal fa-image"></i>
                Simpan
              </button>
            </div>
          </div>
        </form>

      </div>
      <hr>

      <form action="{{ route('kendaraan.update', $item->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" id="merk" class="form-control" name="merk" value="{{ $item->merk }}" placeholder="Merk" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="jenis">Jenis Kendaraan</label>
                <select class="form-select" id="jenis" name="jenis" required>
                  <option selected disabled>-- Pilih Jenis Kendaraan --</option>
                  <option {{ $item->jenis == 'R4' ? 'selected' : '' }}>R4</option>
                  <option {{ $item->jenis == 'R2' ? 'selected' : '' }}>R2</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="no_polisi">Nomor Polisi</label>
                <input type="text" id="no_polisi" class="form-control" name="no_polisi" value="{{ $item->no_polisi }}" placeholder="Nomor Polisi" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" id="tanggal_masuk" class="form-control" name="tanggal_masuk" value="{{ $item->tanggal_masuk }}" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="penanggung_jawab">Penanggung Jawab</label>
                <input type="text" id="penanggung_jawab" class="form-control" name="penanggung_jawab" value="{{ $item->penanggung_jawab }}" placeholder="Penanggung Jawab" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-select" id="status" name="status" required>
                  <option selected disabled>-- Pilih Status Kendaraan --</option>
                  <option {{ $item->status == 'Berfungsi' ? 'selected' : '' }}>Berfungsi</option>
                  <option {{ $item->status == 'Rusak' ? 'selected' : '' }}>Rusak</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn icon icon-left btn-primary">
            <i class="fal fa-save"></i>
            Simpan
          </button>
        </div>
      </form>

    </div>
  </div>
</div>
@endforeach

{{-- Modal Hapus --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="hapusModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title white" id="hapusModal">
          Hapus
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <p class="my-3">Yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn icon icon-left btn-danger ml-1">
            <i class="fal fa-trash-alt"></i>
            Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach