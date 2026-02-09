<div class="card-premium p-0 overflow-hidden shadow-sm col-lg-10 mx-auto">
    <div class="p-4 border-bottom d-flex flex-wrap gap-3 justify-content-between align-items-center bg-white">
        <h6 class="fw-bold mb-0">Data Pegawai</h6>
        <a href="?pg=kpegawai&fl=list" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Keluar</a>
    </div>
    
    <div class="p-4">
        <form method="post" class="row g-3">
            
            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="user" value="" required>
            </div>

            <div class="col-md-6">
                <label class="form-label small fw-bold text-secondary">Username</label>
                <input type="text" class="form-control" placeholder="Username Login" name="username" value="" required>
            </div>
            
            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Status</label>
                <select class="form-select" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Non-Aktif">Non-Aktif</option>
                    <option value="Cuti">Cuti</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Gender</label>
                <select class="form-select" name="gender">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label small fw-bold text-secondary">Role</label>
                <select class="form-select" name="role">
                    <option value="Admin">AdminKelola</option>
                    <option value="Admin">AdminInstansi</option>
                    <option value="User">Staf</option>
                    <option value="Editor">Teknisi</option>
                </select>
            </div>
        
            <div class="col-12">
                <hr class="my-3 text-secondary opacity-25">
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