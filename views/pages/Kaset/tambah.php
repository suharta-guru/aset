<div class="card border-0 shadow-sm rounded-3 overflow-hidden col-lg-10 mx-auto">
    
    <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-white">
        <div>
            <h6 class="fw-bold mb-0">Tambah Aset Baru</h6>
            <small class="text-muted">Isi formulir untuk mendaftarkan barang baru.</small>
        </div>
        <a href="?pg=kaset&fl=list" class="btn btn-primary btn-sm text-white border">
         Kembali
        </a>
    </div>

    <div class="p-4">
        <form method="post" enctype="multipart/form-data" class="row g-3">
            
            <div class="col-12"><h6 class="text-primary fw-bold small text-uppercase mb-0">1. Identitas Aset</h6></div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Kode Aset</label>
                <div class="input-group">
                    <span class="input-group-text bg-light text-muted border-end-0"><i class="bi bi-upc-scan"></i></span>
                    <input type="text" class="form-control bg-light" name="kode_aset" value="AST-2024-001" readonly title="Kode dibuat otomatis">
                </div>
            </div>

            <div class="col-md-8">
                <label class="form-label small fw-bold text-secondary">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Contoh: Laptop Asus ROG Strix" required>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Kategori</label>
                <select class="form-select" name="kategori_id">
                    <option value="" selected disabled>-- Pilih Kategori --</option>
                    <option value="1">Elektronik (Laptop, PC, Printer)</option>
                    <option value="2">Furniture (Meja, Kursi, Lemari)</option>
                    <option value="3">Kendaraan</option>
                    <option value="4">Peralatan Kantor</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Lokasi Penempatan Awal</label>
                <select class="form-select" name="lokasi">
                    <option value="Gudang Utama">Gudang Utama (Default)</option>
                    <option value="Kantor Pusat">Kantor Pusat</option>
                    <option value="Cabang A">Cabang A</option>
                </select>
            </div>

            <div class="col-12 mt-4"><h6 class="text-primary fw-bold small text-uppercase mb-0">2. Detail Pembelian</h6></div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Tanggal Pembelian</label>
                <input type="date" class="form-control" name="tgl_beli" required>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Harga Perolehan</label>
                <div class="input-group">
                    <span class="input-group-text small">Rp</span>
                    <input type="number" class="form-control" name="harga" placeholder="0" min="0">
                </div>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Kondisi Saat Ini</label>
                <select class="form-select" name="kondisi">
                    <option value="Baik" selected>Sangat Baik (Baru)</option>
                    <option value="Bekas">Bekas / Second</option>
                </select>
            </div>

            <div class="col-12 mt-4"><h6 class="text-primary fw-bold small text-uppercase mb-0">3. Foto & Spesifikasi</h6></div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Spesifikasi / Deskripsi</label>
                <textarea class="form-control" name="spesifikasi" rows="4" placeholder="Contoh: RAM 16GB, SSD 512GB, Warna Hitam..."></textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Upload Foto Barang</label>
                <div class="border rounded-2 p-3 text-center bg-light dashed-border">
                    <i class="bi bi-cloud-arrow-up fs-2 text-muted"></i>
                    <div class="small text-muted mt-1 mb-2">Format: JPG, PNG (Max 2MB)</div>
                    <input type="file" class="form-control form-control-sm" name="foto">
                </div>
            </div>

            <div class="col-12 mt-4">
                <hr class="text-secondary opacity-25">
            </div>

            <div class="col-12 text-end">
                <a href="?pg=kaset&fl=list" class="btn btn-light text-secondary border me-2">Batal</a>
                <button type="submit" class="btn btn-primary px-4" name="simpan">
                    <i class="bi bi-save me-2"></i>Simpan Aset
                </button>
            </div>
            
        </form>
    </div>
</div>