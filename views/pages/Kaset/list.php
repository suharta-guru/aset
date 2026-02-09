<div class="card border-0 shadow-sm rounded-3 overflow-hidden">
    
    <div class="p-4 border-bottom d-flex flex-wrap gap-3 justify-content-between align-items-center bg-white">
        <div>
            <h6 class="fw-bold mb-0">Kelola Aset Barang</h6>
        </div>
        <div class="d-flex gap-2">
            <div class="input-group input-group-sm border rounded-2 overflow-hidden" style="width: 250px;">
                <span class="input-group-text bg-white border-0 text-muted"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Cari Aset (Laptop, Kursi)...">
            </div>
            <a href="?pg=kaset&fl=tambah" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-lg me-1"></i> Tambah
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-premium mb-0 align-middle table-hover">
            <thead class="bg-light">
                <tr>
                    <th class="ps-4 py-3 text-uppercase small fw-bold text-secondary" width="50">No</th>
                    <th class="py-3 text-uppercase small fw-bold text-secondary">Nama Aset</th>
                    <th class="py-3 text-uppercase small fw-bold text-secondary">Kode & Kategori</th>
                    <th class="py-3 text-uppercase small fw-bold text-secondary">Status</th>
                    <th class="text-center pe-4 py-3 text-uppercase small fw-bold text-secondary">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ps-4"> <span class="fw-bold small text-dark">1</span></td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:40px; height:40px;">
                                <i class="bi bi-laptop fs-5"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark fs-6">Macbook Pro M1</div>
                                <div class="text-muted small">Tgl Beli: 12 Jan 2023</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-dark small">AST-2023-001</span>
                            <span class="text-secondary small">Elektronik</span>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-10 rounded-pill px-3">
                            <i class="bi bi-person-check me-1"></i> Dipakai
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="?pg=kaset&fl=edit" class="btn btn-sm text-primary bg-primary bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-pencil-square"></i></a>
                            <a href="?pg=kaset&fl=hapus" class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="ps-4"> <span class="fw-bold small text-dark">2</span></td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:40px; height:40px;">
                                <i class="bi bi-chair fs-5"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark fs-6">Kursi Ergonomis</div>
                                <div class="text-muted small">Tgl Beli: 05 Feb 2023</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-dark small">FUR-2023-088</span>
                            <span class="text-secondary small">Furniture</span>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-10 rounded-pill px-3">
                            <i class="bi bi-check-circle me-1"></i> Tersedia
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="?pg=kaset&fl=edit" class="btn btn-sm text-primary bg-primary bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-pencil-square"></i></a>
                            <a href="?pg=kaset&fl=hapus" class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>

                 <tr>
                    <td class="ps-4"> <span class="fw-bold small text-dark">3</span></td>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width:40px; height:40px;">
                                <i class="bi bi-tools fs-5"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-dark fs-6">Printer Epson L3110</div>
                                <div class="text-muted small">Tgl Beli: 10 Des 2022</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-column">
                            <span class="fw-bold text-dark small">PRT-2022-005</span>
                            <span class="text-secondary small">Elektronik</span>
                        </div>
                    </td>
                    <td>
                        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-10 rounded-pill px-3">
                            <i class="bi bi-exclamation-triangle me-1"></i> Maintenance
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="?pg=kaset&fl=edit" class="btn btn-sm text-primary bg-primary bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-pencil-square"></i></a>
                            <a href="?pg=kaset&fl=hapus" class="btn btn-sm text-danger bg-danger bg-opacity-10 border-0 rounded-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="p-3 border-top d-flex justify-content-between align-items-center bg-white">
        <span class="text-muted small ms-2">Menampilkan 3 Data</span>
        <nav>
            <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link border-0 bg-transparent" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link border rounded-2" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0 bg-transparent" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>