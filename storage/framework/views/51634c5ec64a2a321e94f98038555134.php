<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANPORTO - Skills & Achievements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            min-height: 100vh;
            color: white;
            background-image: 
                linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('<?php echo e(asset('images/merah2.jpg')); ?>');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        /* HEADER DENGAN BACKGROUND SPORTY */
        .skills-header {
            /* Background abstrak gelap */
            background: linear-gradient(rgba(0,0,0,0.8), #000000), url('https://images.unsplash.com/photo-1517649763962-0c623066013b?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 120px 0 60px 0;
            text-align: center;
        }

        .page-title {
            font-weight: 900;
            font-size: 3.5rem;
            text-transform: uppercase;
            color: white;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        
        .page-title span { color: #ff0000; } /* Warna merah untuk kata tertentu */

        .page-subtitle {
            color: #ccc;
            font-size: 1.2rem;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

        /* CARD GALERI PRESTASI */
        .sport-card {
            background-color: #111;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        .sport-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(255, 0, 0, 0.3); /* Glow merah saat hover */
        }

        .sport-img-wrapper {
            position: relative;
            height: 300px; /* Tinggi foto */
            overflow: hidden;
        }

        .sport-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            filter: grayscale(30%);
        }

        .sport-card:hover .sport-img {
            transform: scale(1.1); /* Zoom effect */
            filter: grayscale(0%);
        }

        /* Badge Kategori (Pojok Kiri Atas Foto) */
        .category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: #ff0000;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            box-shadow: 0 2px 5px rgba(0,0,0,0.5);
            z-index: 2;
        }

        /* Info di Bawah Foto */
        .card-info {
            padding: 20px;
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Gradasi hitam agar tulisan terbaca */
            background: linear-gradient(to top, #000 10%, rgba(0,0,0,0.8) 50%, transparent 100%);
        }

        .sport-title {
            font-weight: 800;
            font-size: 1.2rem;
            text-transform: uppercase;
            margin-bottom: 5px;
            color: white;
        }

        .sport-year {
            font-size: 0.9rem;
            color: #aaa;
            font-weight: 600;
        }

        /* --- NAVBAR --- */
        .navbar {
            background-color: transparent !important;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 10;
            padding-top: 20px;
        }

        .navbar-brand-btn {
            background-color: #ff0000;
            color: white !important;
            font-weight: 900;
            padding: 10px 30px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 700;
            text-transform: uppercase;
            margin-left: 20px;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover, 
        .navbar-nav .nav-link.active {
            color: #ff0000 !important; /* MERAH */
        }

        /* --- SOCIAL MEDIA FOOTER (BARU) --- */
        .footer-section {
            background-color: transparent
            padding: 10px 0;
            text-align: center;
            position: relative;
            margin-top: 10px;
        }

        .footer-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            color: #888; /* Warna abu-abu agar tidak terlalu mencolok */
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 30px; /* Jarak antar ikon */
        }

        .social-item {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border: 2px solid #333; /* Lingkaran abu gelap */
            border-radius: 50%;
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
            transition: all 0.4s ease;
        }

        /* Efek Hover Keren */
        .social-item:hover {
            background-color: #ff0000; /* Background jadi merah */
            border-color: #ff0000;
            color: white;
            transform: translateY(-5px); /* Ikon naik sedikit */
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.6); /* Efek cahaya merah */
        }

        .copyright {
            margin-top: 40px;
            color: #555;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid px-4 px-lg-5">
            
            <a class="navbar-brand-btn" href="<?php echo e(route('home')); ?>">
                JANPORTO
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('/') ? 'active text-danger' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('projects') ? 'active text-danger' : ''); ?>" href="<?php echo e(route('projects')); ?>">Project</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('skill') ? 'active text-danger' : ''); ?>" href="<?php echo e(route('skills')); ?>">Skills</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('product') ? 'active text-danger' : ''); ?>" href="<?php echo e(route('product')); ?>">Product</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <header class="skills-header">
        <div class="container">
            <h1 class="page-title">JAN <span>Achievements</span></h1>
            <p class="page-subtitle">
                Mens sana in corpore sano
            </p>
        </div>
    </header>

    <div class="container py-5">
        <div class="row g-4">
            
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 col-lg-4">
                <div class="sport-card">
                    <div class="sport-img-wrapper">
                        <div class="category-badge">
                            <i class="fas fa-trophy me-1"></i> <?php echo e($item->category); ?>

                        </div>
                        
                        <img src="<?php echo e($item->image); ?>" class="sport-img" alt="<?php echo e($item->title); ?>">
                        
                        <div class="card-info">
                            <div class="sport-title"><?php echo e($item->title); ?></div>
                            <div class="sport-year">
                                <i class="far fa-calendar-alt me-2"></i><?php echo e($item->year); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

    <footer class="footer-section">
        <div class="container">
            <h3 class="footer-title">Connect With Me</h3>
            
            <div class="social-icons">
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item->url); ?>" class="social-item" title="<?php echo e($item->platform); ?>" target="_blank">
                    <i class="<?php echo e($item->icon); ?>"></i>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            <p class="copyright">
                &copy; 2025 JanPorto.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\ProjekDW\resources\views/skills.blade.php ENDPATH**/ ?>