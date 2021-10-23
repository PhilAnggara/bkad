{{-- Modal Tambah Kendaraan --}}
<div class="modal fade text-left" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModal">
          Tambah Aset Kendaraan</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="" method="post" enctype="multipart/form-data">
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
                <label for="no_pol">Nomor Polisi</label>
                <input type="text" id="no_pol" class="form-control" name="no_pol" placeholder="Nomor Polisi" autocomplete="off" required>
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
                <label for="p_jawab">Penanggung Jawab</label>
                <input type="text" id="p_jawab" class="form-control" name="p_jawab" placeholder="Penanggung Jawab" autocomplete="off" required>
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
                <label for="path">Gambar</label>
                <input type="file" id="path" class="form-control" name="path">
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