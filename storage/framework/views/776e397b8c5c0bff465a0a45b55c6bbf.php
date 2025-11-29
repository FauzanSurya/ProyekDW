<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANPORTO - Skill & Achievements</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
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
                linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url('<?php echo e(asset('images/merah3.jpg')); ?>');
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

        /* MENU ITEM */
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
        .skill-header {
            background: linear-gradient(rgba(0,0,0,0.8), #000000), 
                        url('https://images.unsplash.com/photo-1522778119026-d647f0596c20?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 120px 0 60px 0;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }

        .page-title { font-weight: 900; font-size: 3.5rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; color: white; }
        .page-title span { color: #ff0000; }
        .page-subtitle { color: #ccc; font-size: 1.2rem; font-weight: 400; max-width: 600px; margin: 0 auto; }

        /*  CARD STYLES  */
        .sport-card {
            background-color: #111;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        .sport-card:hover { transform: translateY(-10px); box-shadow: 0 10px 30px rgba(255, 0, 0, 0.3); }
        .sport-img-wrapper { position: relative; height: 300px; overflow: hidden; }
        .sport-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease; filter: grayscale(30%); }
        .sport-card:hover .sport-img { transform: scale(1.1); filter: grayscale(0%); }
        .category-badge { position: absolute; top: 15px; left: 15px; background-color: #ff0000; color: white; padding: 5px 15px; border-radius: 20px; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; box-shadow: 0 2px 5px rgba(0,0,0,0.5); z-index: 2; }
        .card-info { padding: 20px; position: absolute; bottom: 0; width: 100%; background: linear-gradient(to top, #000 10%, rgba(0,0,0,0.8) 50%, transparent 100%); }
        .sport-title { font-weight: 800; font-size: 1.2rem; text-transform: uppercase; margin-bottom: 5px; color: white; }
        .sport-year { font-size: 0.9rem; color: #aaa; font-weight: 600; }

        /*  FOOTER  */
        .footer-section { background-color: transparent; padding: 50px 0; text-align: center; margin-top: 50px; border-top: 1px solid rgba(255,255,255,0.1); }
        .social-icons { display: flex; justify-content: center; gap: 30px; }
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
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('projects')); ?>">Project</a></li>
                    <li class="nav-item"><a class="nav-link active text-danger" href="<?php echo e(route('skill')); ?>">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('product')); ?>">Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">

        <header class="skill-header">
            <div class="container" data-aos="fade-down" data-aos-duration="1200">
                <h1 class="page-title">JAN <span>Achievements</span></h1>
                <p class="page-subtitle" data-aos="fade-up" data-aos-delay="400">
                    Mens sana in corpore sano
                </p>
            </div>
        </header>

        <div class="container py-5">
            <div class="row g-4">
                <?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-4" data-aos="flip-left" data-aos-delay="<?php echo e($index * 150); ?>">
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
</html><?php /**PATH C:\laragon\www\ProjekDW\resources\views/skill.blade.php ENDPATH**/ ?>