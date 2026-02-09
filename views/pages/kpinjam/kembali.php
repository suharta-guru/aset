<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
    
    <div class="p-4 border-bottom bg-white d-flex justify-content-between align-items-center">
        <div>
            <h6 class="fw-bold mb-0">Pengembalian Serah Terima</h6>
            <small class="text-muted">Surat bukti pengembalian BAST.</small>
        </div>
        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-10 rounded-pill px-3">
            <i class="bi bi-pencil-fill me-1"></i> Mode Edit
        </span>
    </div>

    <div class="card-body p-4">
        
        <div class="alert alert-primary bg-primary bg-opacity-10 border-0 fs-small d-flex align-items-center mb-4" role="alert">
            <i class="bi bi-info-circle-fill me-2 text-primary"></i>
            <div class="text-primary small">Informasi Peminjam dan Tanggal tidak dapat diubah di halaman ini.</div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary text-uppercase">Peminjam / Penerima</label>
                <input type="text" class="form-control form-control-sm border rounded-2 shadow-none bg-light text-muted" value="Ahmad Hidayat (Divisi IT)" readonly disabled>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary text-uppercase">Tanggal Serah Terima</label>
                <input type="text" class="form-control form-control-sm border rounded-2 shadow-none bg-light text-muted" value="12 Oktober 2023" readonly disabled>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary text-uppercase">No. Surat</label>
                <input type="text" class="form-control form-control-sm border rounded-2 shadow-none bg-light text-muted fw-bold" value="BAST/2024/X/001" readonly disabled>
            </div>
        </div>

        <hr class="border-secondary opacity-10 my-4">

        <h6 class="fw-bold text-dark mb-3 small text-uppercase"> <i class="bi bi-plus-square me-1"></i> Item Aset Pengembalian</h6>

        <div class="d-flex justify-content-between align-items-end mb-2">
            <h6 class="fw-bold text-secondary mb-0 small text-uppercase">Daftar Barang Saat Ini</h6>
            <small class="text-muted fst-italic">Klik ikon sampah untuk menghapus barang dari surat ini.</small>
        </div>
        
        <div class="table-responsive border rounded-3 mb-4">
            <table class="table table-premium mb-0 align-middle">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4 py-3 text-uppercase small fw-bold text-secondary" style="width: 50px;">No</th>
                        <th class="py-3 text-uppercase small fw-bold text-secondary">Kode Barang</th>
                        <th class="py-3 text-uppercase small fw-bold text-secondary">Nama Aset</th>
                        <th class="py-3 text-uppercase small fw-bold text-secondary">Kondisi</th>
                        <th class="text-end pe-4 py-3 text-uppercase small fw-bold text-secondary">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 text-secondary small">1</td>
                        <td><span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-10 rounded-pill">LP-IT-001</span></td>
                        <td class="fw-bold text-dark">Laptop Lenovo Thinkpad X1</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2">Baik</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px;" onclick="return confirm('Hapus barang ini dari surat BAST?')" title="Hapus Barang">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="ps-4 text-secondary small">2</td>
                        <td><span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-10 rounded-pill">MS-IT-022</span></td>
                        <td class="fw-bold text-dark">Mouse Logitech Wireless</td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2">Baik</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px;" onclick="return confirm('Hapus barang ini dari surat BAST?')" title="Hapus Barang">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                     <tr class="bg-primary bg-opacity-10">
                        <td class="ps-4 text-primary small fw-bold">3</td>
                        <td><span class="badge bg-primary text-white border border-primary rounded-pill">PR-GA-005</span></td>
                        <td class="fw-bold text-primary">Proyektor Epson <span class="badge bg-white text-primary ms-1" style="font-size: 0.6rem;">BARU</span></td>
                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2">Baik</span></td>
                        <td class="text-end pe-4">
                            <button class="btn btn-sm text-danger bg-white border border-danger border-opacity-25 rounded-2" style="width: 32px; height: 32px;">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-3 border-top d-flex justify-content-end align-items-center bg-light gap-2">
        <a href="?pg=<?= $pg ?>&fl=list" class="btn btn-light border bg-white text-secondary btn-sm px-4 fw-bold">
            Kembali
        </a>
        <button type="submit" class="btn btn-primary btn-sm px-4 fw-bold shadow-sm">
            <i class="bi bi-check-circle me-1"></i> Simpan Perubahan
        </button>
    </div>

</div>