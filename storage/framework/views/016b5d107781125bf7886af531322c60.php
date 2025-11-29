<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANPORTO - Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /*  ANIMASI DASAR  */
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
            background-image: 
                linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.9)), 
                url('<?php echo e(asset('images/warehouse-bg.jpg')); ?>');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }

        .main-content {
            animation: fadeInUp 0.8s ease-out forwards;
            padding-top: 80px; 
        }

        /*  NAVBAR FIXED (KAPSUL)  */
        .navbar {
            position: fixed; top: 20px; left: 0; width: 100%; z-index: 9999;
            background: transparent !important; padding: 0; border: none;
        }
        .navbar-brand-btn {
            background-color: #ff0000; color: white !important; font-weight: 900;
            padding: 10px 30px; border-radius: 50px; text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5); transition: 0.3s;
        }
        .navbar-brand-btn:hover { 
            transform: scale(1.05); 
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.6); 
        }
        .navbar-nav .nav-item { 
            margin: 0 5px; 
        }
        .navbar-nav .nav-link {
            background-color: rgba(0, 0, 0, 0.7); backdrop-filter: blur(5px);
            color: white !important; font-weight: 700; text-transform: uppercase;
            font-size: 0.85rem; letter-spacing: 1px; border-radius: 50px;
            padding: 10px 25px !important; border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease; box-shadow: 0 5px 10px rgba(0,0,0,0.3);
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            background-color: #ff0000 !important; border-color: #ff0000;
            transform: translateY(-3px); box-shadow: 0 10px 20px rgba(255, 0, 0, 0.4);
        }
        .navbar-toggler { background-color: rgba(0,0,0,0.8); border: none; border-radius: 50%; padding: 10px; color: white; }
        @media (max-width: 991px) {
            .navbar-collapse { margin-top: 15px; }
            .navbar-nav .nav-link { text-align: center; width: auto; display: inline-block; }
            .navbar-nav .nav-item { text-align: center; margin-bottom: 10px; }
        }

        /*  HERO SECTION & TEXT  */
        .hero-section {
            min-height: calc(100vh - 80px); 
            display: flex; 
            align-items: center; 
            position: relative; 
            overflow: hidden;
        }
        .hero-text-wrapper { 
            text-align: left; 
            z-index: 5; 
        } 
        .hero-title {
            font-size: 6vw; font-weight: 900; color: #ff0000;
            text-transform: uppercase; letter-spacing: 5px; margin: 0; line-height: 1;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.8);
        }
        .hero-subtitle {
            font-size: 1.5rem; font-weight: 700; color: white;
            text-transform: lowercase; letter-spacing: 2px; margin-top: 10px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.8);
        }

        /*  ELEGANT FLIP CARD  */
        .flip-card-container {
            background-color: transparent;
            width: 400px; 
            height: 550px;
            perspective: 1000px;
            margin: 0 auto;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s cubic-bezier(0.4, 0.2, 0.2, 1);
            transform-style: preserve-3d;
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.6);
        }

        .flip-card-container:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 25px;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        /* SISI DEPAN */
        .flip-card-front {
            background-color: #000;
        }

        /* SISI BELAKANG */
        .flip-card-back {
            background-color: #1a1a1a; 
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .flip-img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }
        
        /* TOMBOL EXPLORE ME */
        .btn-explore {
            border: 2px solid white; 
            color: white;
            background: transparent;
            transition: all 0.3s ease; 
        }

        /* Saat di-Hover */
        .btn-explore:hover {
            background-color: #ff0000; 
            border-color: #ff0000;     
            color: white;             
            transform: translateY(-3px); 
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.6); 
        }

        /* Responsif HP */
        @media (max-width: 991px) {
            .hero-section { flex-direction: column; text-align: center; padding-bottom: 50px; }
            .hero-text-wrapper { margin-top: 30px; text-align: center; }
            .flip-card-container { width: 300px; height: 450px; } 
            .hero-title { font-size: 15vw; }
        }

        /* --- 6. FOOTER --- */
        .footer-section { background-color: transparent; padding: 30px 0; text-align: center; }
        .social-icons { display: flex; justify-content: center; gap: 30px; }
        .social-item { display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; border: 2px solid #333; border-radius: 50%; color: white; font-size: 1.5rem; text-decoration: none; transition: 0.4s; }
        .social-item:hover { background-color: #ff0000; border-color: #ff0000; transform: translateY(-5px); box-shadow: 0 0 15px rgba(255, 0, 0, 0.6); }
        .copyright { margin-top: 30px; color: #555; font-size: 0.8rem; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand-btn" href="<?php echo e(route('home')); ?>">JANPORTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link active text-danger" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('projects')); ?>">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('skill')); ?>">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('product')); ?>">Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">

        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1500">
                        
                        <div class="flip-card-container">
                            <div class="flip-card-inner">
                                
                                <div class="flip-card-front">
                                    <img src="<?php echo e(asset('images/home1.jpg')); ?>" class="flip-img" alt="Foto Depan">
                                </div>
                                
                                <div class="flip-card-back">
                                     <img src="<?php echo e(asset('images/home2.jpg')); ?>" class="flip-img" style="filter: brightness(0.7);" alt="Foto Belakang">
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 hero-text-wrapper" data-aos="fade-left" data-aos-duration="1200">
                        <h1 class="hero-title">Jan<br>Porto</h1>
                        <p class="hero-subtitle">welcome to my journey</p>
                        <p class="hero-subtitle" style="font-size: 1rem; font-weight: 300; margin-top: 0;">inilah perjalanan hidup dengan rasa syukur yang tiada tara</p>
                        <div class="mt-4">
                            <a href="<?php echo e(route('about')); ?>" class="btn btn-explore rounded-pill px-4 py-2 fw-bold">Explore Me</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <footer class="footer-section" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="social-icons">
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($item->url); ?>" class="social-item" title="<?php echo e($item->platform); ?>" target="_blank" data-aos="zoom-in" data-aos-delay="300">
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
</html><?php /**PATH C:\laragon\www\ProjekDW\resources\views/home.blade.php ENDPATH**/ ?>