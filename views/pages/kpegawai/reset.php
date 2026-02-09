<div class="card-premium p-0 overflow-hidden shadow-sm col-lg-10 mx-auto">
    <div class="p-4 border-bottom d-flex flex-wrap gap-3 justify-content-between align-items-center bg-white">
        <h6 class="fw-bold mb-0">Data Pegawai</h6>
        <a href="?pg=kpegawai&fl=list" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Keluar</a>
    </div>
    
    <div class="p-4">
        <form method="post" class="row g-3">
            
            <div class="col-md-12">
                <label class="form-label small fw-bold text-secondary">Password Baru</label>
                <input type="password" class="form-control" placeholder="Password Baru" name="password" value="" required>
            </div>

            <div class="text-center col-6 d-grid gap-3 mx-auto">
                <a href="?pg=kpegawai&fl=list" type="submit" class=" btn btn-primary" name="tombol" value="simpan">
                    <i class="bi bi-save me-2"></i>Simpan Data
                </a>
                <a href="?pg=kpegawai&fl=list" class="btn btn-light text-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>