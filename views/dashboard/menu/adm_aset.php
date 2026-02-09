
<?php
    switch($pg)
    {
        case'kaset':$active_kaset = 'active';break;
        case'Kserah':$active_Kserah = 'active';break;
        case'hapus':$active_hapus = 'active';break;
            
    }
?>

<div class="nav-section-label">Admin Aset</div>
<a href="?pg=kaset&fl=list" class="nav-link-custom <?= $active_kaset ?>"><i data-lucide="package"></i> Kelola aset</a>
<a href="?pg=Kserah&fl=list" class="nav-link-custom <?= $active_Kserah ?>"><i data-lucide="handshake"></i> Serah terima aset</a>
<a href="?pg=hapus&fl=list" class="nav-link-custom <?= $active_hapus ?>"><i data-lucide="file-x-corner"></i> Penghapusan</a>


