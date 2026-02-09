<div class="card border-0 shadow-sm rounded-3 overflow-hidden col-lg-10 mx-auto">
    
    <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-white">
        <div>
            <h6 class="fw-bold mb-0">Edit Data Aset</h6>
            <small class="text-muted">Mengubah data: <span class="text-primary fw-bold">Macbook Pro M1</span></small>
        </div>
        <a href="?pg=kaset&fl=list" class="btn btn-light btn-sm text-secondary border">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="p-4">
        <form method="post" enctype="multipart/form-data" class="row g-3">
            
            <input type="hidden" name="id_aset" value="1">

            <div class="col-12"><h6 class="text-primary fw-bold small text-uppercase mb-0">1. Identitas Aset</h6></div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Kode Aset</label>
                <div class="input-group">
                    <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-lock-fill"></i></span>
                    <input type="text" class="form-control bg-light" name="kode_aset" value="AST-2023-001" readonly>
                </div>
                <div class="form-text small text-muted">Kode aset tidak dapat diubah.</div>
            </div>

            <div class="col-md-8">
                <label class="form-label small fw-bold text-secondary">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" value="Macbook Pro M1" required>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Kategori</label>
                <select class="form-select" name="kategori_id">
                    <option value="1" selected>Elektronik</option>
                    <option value="2">Furniture</option>
                    <option value="3">Kendaraan</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Lokasi Saat Ini</label>
                <select class="form-select" name="lokasi">
                    <option value="Gudang Utama">Gudang 1</option>
                    <option value="Kantor Pusat" selected>Gudang 2</option>
                    <option value="Cabang A">gudang 3</option>
                </select>
            </div>

            <div class="col-12 mt-4"><h6 class="text-primary fw-bold small text-uppercase mb-0">2. Detail & Kondisi</h6></div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Tanggal Pembelian</label>
                <input type="date" class="form-control" name="tgl_beli" value="2023-01-12" required>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Harga Perolehan</label>
                <div class="input-group">
                    <span class="input-group-text small">Rp</span>
                    <input type="number" class="form-control" name="harga" value="18000000">
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Kondisi Terkini</label>
                <select class="form-select" name="kondisi">
                    <option value="Baik" selected>Baik / Layak Pakai</option>
                    <option value="Rusak Ringan">Rusak Ringan (Perlu Service)</option>
                    <option value="Rusak Berat">Rusak Berat (Afkir)</option>
                </select>
            </div>

            <div class="col-12 mt-4"><h6 class="text-primary fw-bold small text-uppercase mb-0">3. Foto & Spesifikasi</h6></div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Spesifikasi</label>
                <textarea class="form-control" name="spesifikasi" rows="5">Chip M1, RAM 8GB, SSD 256GB, Warna Space Grey.</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Foto Barang</label>
                
                <div class="d-flex gap-3 align-items-start">
                    <div class="text-center">
                        <img src="https://via.placeholder.com/100" class="rounded border p-1" style="width: 80px; height: 80px; object-fit: cover;" alt="Foto Lama">
                        <div class="small text-muted mt-1" style="font-size: 0.7rem;">Foto Saat Ini</div>
                    </div>

                    <div class="flex-grow-1">
                        <input type="file" class="form-control form-control-sm mb-1" name="foto">
                        <div class="small text-secondary fst-italic">
                            *Biarkan kosong jika tidak ingin mengubah foto.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <hr class="text-secondary opacity-25">
            </div>

            <div class="col-12 text-end">
                <a href="?pg=kaset&fl=list" class="btn btn-light text-secondary border me-2">Batal</a>
                <button type="submit" class="btn btn-primary px-4" name="update">
                    <i class="bi bi-check-circle me-2"></i>Simpan Perubahan
                </button>
            </div>
            
        </form>
    </div>
</div>