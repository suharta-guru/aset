<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
    
    <div class="p-4 border-bottom bg-white">
        <h6 class="fw-bold mb-0">Buat Surat Serah Terima Baru</h6>
        <small class="text-muted">Isi data peminjaman dan masukkan daftar aset.</small>
    </div>

    <div class="card-body p-4">
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary text-uppercase">Pilih Pegawai (Penerima)</label>
                <select class="form-select form-select-sm border rounded-2 shadow-none">
                    <option selected disabled>-- Pilih Pegawai --</option>
                    <option value="1">Ahmad Hidayat (Divisi IT)</option>
                    <option value="2">Siti Rahma (Divisi Keuangan)</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary text-uppercase">Tanggal Serah Terima</label>
                <input type="date" class="form-control form-control-sm border rounded-2 shadow-none" value="2024-02-06">
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary text-uppercase">No. Surat (Otomatis)</label>
                <input type="text" class="form-control form-control-sm border rounded-2 shadow-none bg-light" value="BAST/2024/II/005" readonly>
            </div>
            <div class="col-12">
                <label class="form-label small fw-bold text-secondary text-uppercase">Keterangan / Keperluan</label>
                <textarea class="form-control form-control-sm border rounded-2 shadow-none" rows="2" placeholder="Contoh: Peminjaman untuk WFH atau Project X..."></textarea>
            </div>
        </div>

        <hr class="border-secondary opacity-10 my-4">

        <div class="d-flex flex-wrap align-items-end gap-3 mb-3 p-3 bg-light rounded-3 border border-light">
            <div class="flex-grow-1">
                <label class="form-label small fw-bold text-dark">Cari & Pilih Aset</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border text-muted"><i class="bi bi-box-seam"></i></span>
                    <select class="form-select border shadow-none">
                        <option selected disabled>-- Cari Barang Berdasarkan Nama/Kode --</option>
                        <option value="LP01">Laptop Lenovo Thinkpad (LP-IT-001)</option>
                        <option value="MS02">Mouse Logitech (MS-IT-022)</option>
                        <option value="PR05">Proyektor Epson (PR-GA-005)</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-primary px-4">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Aset
                </button>
            </div>
        </div>

        <h6 class="fw-bold text-secondary mb-3 small text-uppercase">Daftar Barang yang Dipinjamkan</h6>
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
                            <button class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px;" title="Hapus Barang">
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
                            <button class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px;" title="Hapus Barang">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
    </div>

    <div class="p-3 border-top d-flex justify-content-end align-items-center bg-light gap-2">
        <a href="?pg=Kserah&fl=list" class="btn btn-light border bg-white text-secondary btn-sm px-4 fw-bold">
            Batal
        </a>
        <button type="submit" class="btn btn-primary btn-sm px-4 fw-bold shadow-sm">
            <i class="bi bi-save me-1"></i> Simpan Surat
        </button>
    </div>

</div>