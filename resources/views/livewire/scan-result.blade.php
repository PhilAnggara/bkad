<div>
  <div class="input-group mb-3">
		<span class="input-group-text">Kode Barang</span>
		<input type="text" id="kodeBarang" wire:model="term" class="form-control" placeholder="Pindai QR Code atau masukan kode barang" autofocus>
	</div>
	
	@if ($status == 'stand by')
		{{--  --}}
	@elseif ($status == 'not found')
		<div class="p-5">
			<div class="alert alert-light-secondary color-secondary text-center p-3">
				<i class="fal fa-file-search fa-5x"></i>
				<h5 class="alert-heading mt-3">
					Data tidak ditemukan
				</h5>
			</div>
		</div>
	@else
		@if ($item->gambar)
			<img src="{{ Storage::url($item->gambar) }}" class="img-fluid img-thumbnail mb-2">
		@else
			<div class="border mb-2">
				<div class="text-center mt-3">
					<i class="fad fa-image fa-7x"></i>
				</div>
				<p class="text-center mt-2">Belum Ada Gambar</p>
			</div>
		@endif
		<div class="table-responsive">
			<table class="table table-hover table-bordered text-nowrap mb-0">
				<tbody>
					@if ($category == 1)
						<tr>
							<td>Merk</td>
							<th>{{ $item->merk }}</th>
						</tr>
					@else
						<tr>
							<td>Nama Barang</td>
							<th>{{ $item->nama_barang }}</th>
						</tr>
					@endif
					<tr>
						<td>Jenis</td>
						<th>{{ $item->jenis }}</th>
					</tr>
					@if ($category == 1)
						<tr>
							<td>No Polisi</td>
							<th>{{ $item->no_polisi }}</th>
						</tr>
					@endif
					<tr>
						<td>Tanggal Masuk</td>
						<th>{{ Carbon\Carbon::parse($item->tanggal_masuk)->isoFormat('D MMMM YYYY') }}</th>
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
	@endif

</div>
