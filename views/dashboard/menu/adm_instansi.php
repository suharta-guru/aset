<?php
    switch($pg)
    {
        case'kpegawai':$active_kpegawai = 'active';break;
        case'kpengelola':$active_kpengelola = 'active';break;
            
    }
?>

<div class="nav-section-label">Admin Instansi</div>
    <a href="?pg=kpegawai&fl=list" class="nav-link-custom <?= $active_kpegawai ?>"><i data-lucide="user"></i> Pegawai</a>
    <a href="?pg=kpengelola&fl=list" class="nav-link-custom <?= $active_kpengelola ?>"><i data-lucide="userCog"></i> Pengelola aset</a>