<style>
    @media print {
        /* 1. Sembunyikan SEMUA elemen di halaman web */
        body * {
            visibility: hidden;
        }

        /* 2. Reset margin & padding halaman agar pas di pojok kertas */
        body, html {
            margin: 0;
            padding: 0;
            background-color: white !important; /* Pastikan background putih */
        }

        /* 3. Tampilkan HANYA elemen kartu surat (dan isinya) */
        .card, .card * {
            visibility: visible;
        }

        /* 4. Posisikan kartu surat tepat di pojok kiri atas kertas */
        .card {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0 !important;
            padding: 0 !important;
            border: none !important; /* Hilangkan border garis tipis */
            box-shadow: none !important; /* Hilangkan bayangan */
            max-width: none !important; /* Biarkan memenuhi lebar kertas printer */
        }

        /* 5. Pastikan tombol navigasi benar-benar hilang (safety) */
        .no-print {
            display: none !important;
        }
    }
</style>

<div class="container-fluid py-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4 no-print">
        <a href="?pg=Kserah&fl=list" class="btn btn-light border bg-white text-secondary shadow-sm">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
        <button onclick="window.print()" class="btn btn-primary shadow-sm px-4">
            <i class="bi bi-printer-fill me-1"></i> Cetak Dokumen
        </button>
    </div>

    <div class="card border-0 shadow rounded-3 overflow-hidden mx-auto" style="max-width: 210mm; min-height: 297mm;"> 
        <div class="card-body p-5">
            
            <div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center fw-bold fs-4" style="width: 60px; height: 60px;">
                        <i class="bi bi-buildings"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-0 text-dark">PT. MEN SET</h5>
                        <p class="small text-muted mb-0">Jl. Bagus Yabin Kopti </p>
                        <p class="small text-muted mb-0">Telp: (021) 555-0123 | Email: admin@kantor.com</p>
                    </div>
                </div>
                <div class="text-end">
                    <h4 class="fw-bold text-uppercase mb-1" style="letter-spacing: 1px;">Berita Acara</h4>
                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-10 px-3 py-2 fs-6">
                        No: BAST/2024/X/001
                    </span>
                </div>
            </div>

            <div class="text-center mb-4">
                <h5 class="fw-bold text-uppercase text-decoration-underline mb-3">Serah Terima Aset Barang</h5>
                <p class="text-muted small">
                    Pada hari ini, <strong>Kamis</strong> tanggal <strong>12 Oktober 2023</strong>, kami yang bertanda tangan di bawah ini:
                </p>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-6">
                    <div class="p-3 bg-light rounded-3 border border-light h-100">
                        <h6 class="fw-bold small text-uppercase text-primary mb-3 border-bottom pb-2">Pihak Pertama (Yang Menyerahkan)</h6>
                        <table class="table table-borderless table-sm mb-0 small">
                            <tr>
                                <td class="text-muted" width="80">Nama</td>
                                <td class="fw-bold text-dark">: Budi Santoso</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Jabatan</td>
                                <td class="text-dark">: Staff Inventory</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Divisi</td>
                                <td class="text-dark">: Umum & GA</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 bg-light rounded-3 border border-light h-100">
                        <h6 class="fw-bold small text-uppercase text-primary mb-3 border-bottom pb-2">Pihak Kedua (Penerima)</h6>
                        <table class="table table-borderless table-sm mb-0 small">
                            <tr>
                                <td class="text-muted" width="80">Nama</td>
                                <td class="fw-bold text-dark">: Ahmad Hidayat</td>
                            </tr>
                            <tr>
                                <td class="text-muted">NIP/ID</td>
                                <td class="text-dark">: 001-IT</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Divisi</td>
                                <td class="text-dark">: Teknologi Informasi</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <p class="small text-muted mb-3">
                Telah melakukan serah terima barang inventaris kantor dengan rincian sebagai berikut:
            </p>

            <div class="table-responsive mb-4">
                <table class="table table-bordered align-middle border-secondary border-opacity-25">
                    <thead class="bg-light text-center">
                        <tr>
                            <th class="py-2 text-uppercase small fw-bold text-secondary" style="width: 5%;">No</th>
                            <th class="py-2 text-uppercase small fw-bold text-secondary">Kode Barang</th>
                            <th class="py-2 text-uppercase small fw-bold text-secondary" style="width: 40%;">Nama / Deskripsi Barang</th>
                            <th class="py-2 text-uppercase small fw-bold text-secondary">Kondisi</th>
                            <th class="py-2 text-uppercase small fw-bold text-secondary">Jml</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center small">1</td>
                            <td class="text-center"><span class="small fw-bold font-monospace">LP-IT-001</span></td>
                            <td>
                                <span class="fw-bold d-block text-dark">Laptop Lenovo Thinkpad X1</span>
                                <span class="small text-muted">SN: 8829102-X | Warna Hitam</span>
                            </td>
                            <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-10 rounded-pill px-2">Baik</span></td>
                            <td class="text-center fw-bold">1 Unit</td>
                        </tr>
                        <tr>
                            <td class="text-center small">2</td>
                            <td class="text-center"><span class="small fw-bold font-monospace">MS-IT-022</span></td>
                            <td>
                                <span class="fw-bold d-block text-dark">Mouse Logitech Wireless</span>
                                <span class="small text-muted">Include Baterai</span>
                            </td>
                            <td class="text-center"><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-10 rounded-pill px-2">Baik</span></td>
                            <td class="text-center fw-bold">1 Unit</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-5">
                <p class="small text-muted text-justify" style="line-height: 1.6;">
                    Demikian berita acara ini dibuat dengan sebenar-benarnya. Barang tersebut telah diterima dalam keadaan baik dan lengkap. Pihak Kedua bertanggung jawab penuh atas penggunaan dan pemeliharaan barang tersebut selama masa peminjaman.
                </p>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-6 text-center">
                    <p class="small text-muted mb-1">Yang Menyerahkan,</p>
                    <p class="fw-bold small">PIHAK PERTAMA</p>
                    <br><br><br>
                    <p class="fw-bold text-decoration-underline mb-0">Budi Santoso</p>
                    <p class="small text-muted">Admin Inventory</p>
                </div>
                <div class="col-6 text-center">
                    <p class="small text-muted mb-1">Yang Menerima,</p>
                    <p class="fw-bold small">PIHAK KEDUA</p>
                    <br><br><br>
                    <p class="fw-bold text-decoration-underline mb-0">Ahmad Hidayat</p>
                    <p class="small text-muted">Peminjam</p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    window.onload = function() {
        // Memberikan sedikit jeda agar semua icon bootstrap & gambar termuat sempurna
        setTimeout(function() {
            window.print();
        }, 500);
    };

    // Event listener untuk mendeteksi kapan dialog print ditutup
    window.onafterprint = function() {
        window.close();
    };
</script>