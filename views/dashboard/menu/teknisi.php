<?php
    switch($pg)
    {
        case'kbaru':$active_kbaru = 'active';break;
            
    }
?>

<div class="nav-section-label">Teknisi Aset</div>
<a href="?pg=kbaru&fl=list" class="nav-link-custom <?= $active_kbaru ?>">
    <i class="bi bi-wrench"></i> Perbaruan
</a>