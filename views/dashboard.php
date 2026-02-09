<?php 
    
        $pg=$_GET['pg'];
        $fl=$_GET['fl'];
        if($pg=='logout'){
            session_destroy();
            header('Location:index.php');
            
        } 
        
    ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Core | Premium Enterprise Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <?php include('dashboard/sidebar.php') ?>

    <div class="main-content">
        
        <?php include('dashboard/header.php') ?>

        <div class="p-4 p-lg-5">
            
        <?php
        
            if($pg=='' && $fl==''){
                include('pages/beranda.php');
            }else if($pg=='' && $fl=='kpegawai'){
                include('pages/kpegawai.php');
            }else{
                include('pages/'.$pg.'/'.$fl.'.php');
            }
        ?>
       

        </div> 
    </div> 
    <script src="assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>