<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANPORTO - Projects</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /*  ANIMASI HALAMAN  */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /*  BODY & BACKGROUND  */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            min-height: 100vh;
            color: white;
            /* Background Utama */
            background-image: 
                linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('<?php echo e(asset('images/merah1.jpg')); ?>');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .main-content {
            animation: fadeInUp 0.8s ease-out forwards;
            padding-top: 0px; 
        }

        /*  NAVBAR FIXED */
        .navbar {
            position: fixed;
            top: 20px;
            left: 0;
            width: 100%;
            z-index: 9999;
            background: transparent !important;
            padding: 0;
            border: none;
        }

        /* LOGO KAPSUL */
        .navbar-brand-btn {
            background-color: #ff0000;
            color: white !important;
            font-weight: 900;
            padding: 10px 30px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
            transition: 0.3s;
        }
        .navbar-brand-btn:hover { transform: scale(1.05); box-shadow: 0 0 20px rgba(255, 0, 0, 0.6); }
        .navbar-nav .nav-item { margin: 0 5px; }
        .navbar-nav .nav-link {
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            color: white !important;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border-radius: 50px;
            padding: 10px 25px !important;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            box-shadow: 0 5px 10px rgba(0,0,0,0.3);
        }

        .navbar-nav .nav-link:hover, 
        .navbar-nav .nav-link.active {
            background-color: #ff0000 !important;
            border-color: #ff0000;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.4);
        }
        
        .navbar-toggler { background-color: rgba(0,0,0,0.8); border: none; border-radius: 50%; padding: 10px; color: white; }

        @media (max-width: 991px) {
            .navbar-collapse { margin-top: 15px; }
            .navbar-nav .nav-link { text-align: center; width: auto; display: inline-block; }
            .navbar-nav .nav-item { text-align: center; margin-bottom: 10px; }
        }

        /*  HEADER PAGE  */
        .project-header {
            background: linear-gradient(rgba(0,0,0,0.8), #000000), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 120px 0 60px 0;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }

        .page-title { font-weight: 900; font-size: 3.5rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; color: white; text-shadow: 0 5px 15px rgba(0,0,0,0.5); }
        .page-title span { color: #ff0000; }
        .page-subtitle { color: #ccc; font-size: 1.2rem; font-weight: 400; letter-spacing: 3px; text-transform: uppercase; }

        /*  PROJECT CARDS  */
        .project-card {
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-10px);
            border-color: #ff0000;
            box-shadow: 0 10px 30px rgba(255, 0, 0, 0.2);
        }

        .card-body { padding: 2rem; }
        .card-title { font-weight: 800; font-size: 1.5rem; color: #ff0000; margin-bottom: 15px; }
        .card-text { color: #bbbbbb; font-weight: 400; line-height: 1.6; margin-bottom: 25px; }

        .btn-custom { border: 1px solid white; color: white; padding: 8px 25px; border-radius: 50px; text-transform: uppercase; font-weight: 700; font-size: 0.8rem; transition: 0.3s; text-decoration: none; display: inline-block; }
        .btn-custom:hover { background-color: #ff0000; border-color: #ff0000; color: white; }

        /* Tombol PDF Khusus */
        .btn-pdf { border: 1px solid #ff0000; color: #ff0000; }
        .btn-pdf:hover { background-color: #ff0000; color: white; }
        .d-flex.gap-2 { display: flex; gap: 10px; }

        /*  FOOTER  */
        .footer-section { background-color: transparent; padding: 50px 0; text-align: center; margin-top: 50px; border-top: 1px solid rgba(255,255,255,0.1); }
        .social-icons { display: flex; justify-content: center; gap: 30px; margin-bottom: 20px; }
        .social-item { display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; border: 2px solid #333; border-radius: 50%; color: white; font-size: 1.5rem; text-decoration: none; transition: all 0.4s ease; }
        .social-item:hover { background-color: #ff0000; border-color: #ff0000; color: white; transform: translateY(-5px); box-shadow: 0 0 15px rgba(255, 0, 0, 0.6); }
        .copyright { margin-top: 40px; color: #555; font-size: 0.8rem; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand-btn" href="<?php echo e(route('home')); ?>">JANPORTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">About Me</a></li>
                    <li class="nav-item"><a class="nav-link active text-danger" href="<?php echo e(route('projects')); ?>">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('skill')); ?>">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('product')); ?>">Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">

        <header class="project-header">
            <div class="container" data-aos="zoom-out" data-aos-duration="1200">
                <h1 class="page-title">Jan <span>Projects</span></h1>
                <p class="page-subtitle">Karya yang sudah saya buat di masa perkuliahan</p>
            </div>
        </header>

        <div class="container pb-5">
            <div class="row g-4"> 
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="<?php echo e($index * 150); ?>">
                    <div class="project-card text-start">
                        <div class="card-body d-flex flex-column h-100">
                            <h5 class="card-title"><?php echo e($item->title); ?></h5>
                            <p class="card-text flex-grow-1">
                                <?php echo e($item->description); ?>

                            </p>
                            
                            <div class="mt-auto d-flex gap-2">
                                <a href="<?php echo e($item->link); ?>" class="btn-custom">View Detail</a>
                                <?php if($item->pdf_file): ?>
                                <a href="<?php echo e(asset($item->pdf_file)); ?>" target="_blank" class="btn-custom btn-pdf">
                                    <i class="fas fa-file-pdf me-1"></i> PDF
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <footer class="footer-section" data-aos="fade-up" data-aos-offset="10">
            <div class="container">
                <div class="social-icons">
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($item->url); ?>" class="social-item" title="<?php echo e($item->platform); ?>" target="_blank">
                        <i class="<?php echo e($item->icon); ?>"></i>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <p class="copyright">&copy; 2025 JanPorto.</p>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ duration: 1000, once: true }); </script>
</body>
</html><?php /**PATH C:\laragon\www\ProjekDW\resources\views/projects.blade.php ENDPATH**/ ?>