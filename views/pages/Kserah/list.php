<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
    
    <div class="p-4 border-bottom d-flex flex-wrap gap-3 justify-content-between align-items-center bg-white">
        <div>
            <h6 class="fw-bold mb-0">Daftar Serah Terima (BAST)</h6>
            <small class="text-muted">Kelola data peminjaman aset</small>
        </div>
        <div class="d-flex gap-2">
            <div class="input-group input-group-sm border rounded-2 overflow-hidden" style="width: 250px;">
                <span class="input-group-text bg-white border-0 text-muted"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Cari No. Surat / Peminjam...">
            </div>
            <a href="?pg=Kserah&fl=tambah" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-lg me-1"></i> Tambah
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-premium mb-0 align-middle table-hover">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 text-uppercase small fw-bold text-secondary">No. Surat</th>
                    <th class="py-3 text-uppercase small fw-bold text-secondary">Peminjam / Penerima</th>
                    <th class="py-3 text-uppercase small fw-bold text-secondary">Tanggal Serah Terima</th>
                    <th class="py-3 text-uppercase small fw-bold text-secondary">Total Aset</th>
                    <th class="text-center pe-4 py-3 text-uppercase small fw-bold text-secondary">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ps-4"> 
                        <span class="fw-bold small text-dark">BAST/2024/X/001</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:32px; height:32px; font-size: 0.7rem;">AH</div>
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-dark fs-6">Ahmad Hidayat</span>
                                <span class="text-muted small" style="font-size: 0.75rem;">Divisi IT</span>
                            </div>
                        </div>
                    </td>
                    <td class="text-secondary small">
                        <i class="bi bi-calendar3 me-1"></i> 12 Okt 2023
                    </td>
                    <td>
                        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-10 rounded-pill px-3">3 Barang</span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="?pg=Kserah&fl=cetak" target="_blank" class="btn btn-sm text-success bg-success bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;" title="Print Surat">
                                <i class="bi bi-printer-fill"></i>
                            </a>
                            <a href="?pg=Kserah&fl=edit" class="btn btn-sm text-primary bg-primary bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;" title="Edit Surat">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="?pg=Kserah&fl=hapus&id=001" onclick="return confirm('Yakin ingin menghapus surat ini?')" class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;" title="Hapus Surat">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="ps-4"> 
                        <span class="fw-bold small text-dark">BAST/2024/X/002</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:32px; height:32px; font-size: 0.7rem;">SR</div>
                            <div class="d-flex flex-column">
                                <span class="fw-bold text-dark fs-6">Siti Rahma</span>
                                <span class="text-muted small" style="font-size: 0.75rem;">Divisi Keuangan</span>
                            </div>
                        </div>
                    </td>
                    <td class="text-secondary small">
                        <i class="bi bi-calendar3 me-1"></i> 14 Okt 2023
                    </td>
                    <td>
                        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-10 rounded-pill px-3">1 Barang</span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="?pg=Kserah&fl=cetak" target="_blank" class="btn btn-sm text-success bg-success bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;" title="Print Surat">
                                <i class="bi bi-printer-fill"></i>
                            </a>
                            <a href="?pg=Kserah&fl=edit" class="btn btn-sm text-primary bg-primary bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;" title="Edit Surat">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="?pg=Kserah&fl=hapus&id=001" onclick="return confirm('Yakin ingin menghapus surat ini?')" class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;" title="Hapus Surat">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="p-3 border-top d-flex justify-content-between align-items-center bg-white">
        <span class="text-muted small ms-2">Menampilkan 2 Surat</span>
        <nav>
            <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link border-0 bg-transparent" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link border rounded-2" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0 bg-transparent" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>