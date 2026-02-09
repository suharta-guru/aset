<?php
    switch($pg)
    {
        case'kpinjam':$active_kpinjam = 'active';break;
            
    }
?>

<div class="nav-section-label">Staf Aset</div>
<a href="?pg=kpinjam&fl=list" class="nav-link-custom <?= $active_kpinjam ?>" >
    <i class="bi bi-clipboard-check"></i> Peminjaman aset
</a>