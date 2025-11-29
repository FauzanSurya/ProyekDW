<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANPORTO - About Me</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /*  ANIMASI  */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            min-height: 100vh;
            color: white;
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                              url('<?php echo e(asset('images/merah3.jpg')); ?>');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            scroll-behavior: smooth;
        }

        .main-content {
            animation: fadeInUp 0.8s ease-out forwards;
            padding-top: 0px; 
        }

        /*  2. NAVBAR FIXED (KAPSUL)  */
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
            margin: 0 5px; position: relative; 
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

        /*  DROPDOWN MENU CUSTOM (HOVER)  */
        .dropdown-menu {
            display: block;
            opacity: 0; visibility: hidden;
            transform: translateY(20px);
            transition: all 0.4s ease;
            
            background-color: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 10px;
            margin-top: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            min-width: 180px;
            left: 50%; transform: translateX(-50%) translateY(20px); 
        }

        .nav-item:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .dropdown-item {
            color: #ccc !important; font-weight: 600; font-size: 0.9rem;
            padding: 10px 15px; border-radius: 10px; transition: 0.3s;
            text-align: center;
        }
        .dropdown-item:hover {
            background-color: #ff0000; color: white !important;
            transform: translateX(5px);
        }

        /* HP Adjustment */
        .navbar-toggler { background-color: rgba(0,0,0,0.8); border: none; border-radius: 50%; padding: 10px; color: white; }
        @media (max-width: 991px) {
            .navbar-collapse { margin-top: 15px; }
            .navbar-nav .nav-link { text-align: center; width: auto; display: inline-block; }
            .navbar-nav .nav-item { text-align: center; margin-bottom: 10px; }
            .dropdown-menu { position: static; opacity: 1; visibility: visible; transform: none; background: transparent; border: none; text-align: center; padding: 0; box-shadow: none; }
            .dropdown-item { color: #aaa !important; padding: 5px; }
            .dropdown-item:hover { background: transparent; color: #ff0000 !important; transform: none; }
        }

        /*  HEADER  */
        .about-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.9)), 
                        url('https://images.unsplash.com/photo-1503327431567-3ab5e6e79140?q=80&w=1920&auto=format&fit=crop');
            background-size: cover; background-position: center; background-attachment: fixed;
            padding: 120px 0 60px 0; text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
            margin-bottom: 50px; border-radius: 0 0 30px 30px;
        }
        .page-title { 
            font-weight: 900; 
            font-size: 3.5rem; 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            margin-bottom: 10px; 
            color: white; text-shadow: 0 5px 15px rgba(0,0,0,0.5); 
        }
        .page-title span { 
            color: #ff0000; 
        }
        .page-subtitle { 
            color: #ddd; 
            font-size: 1.2rem; 
            font-weight: 400; letter-spacing: 3px; 
            text-transform: uppercase; 
        }

        section[id], div[id] { scroll-margin-top: 120px; }

        /*  PROFIL & BIO  */
        .profile-img { width: 350px; height: 350px; object-fit: cover; border-radius: 50%; border: 8px solid #ff0000; box-shadow: 0 0 30px rgba(255, 0, 0, 0.4); transition: 0.5s; }
        .profile-img:hover { transform: scale(1.05); box-shadow: 0 0 50px rgba(255, 0, 0, 0.6); filter: grayscale(0%); }
        .bio-card { background-color: rgba(0, 0, 0, 0.5); border-left: 5px solid #ff0000; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
        .bio-intro { font-size: 1.1rem; line-height: 1.8; color: #cccccc; margin-bottom: 30px; }
        .table-bio { width: 100%; margin-bottom: 0; background-color: transparent !important; }
        .table-bio td { background-color: transparent !important; color: #eeeeee; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.1); vertical-align: top; }
        .label-bio { font-weight: 700; color: #ff0000; width: 150px; }

        /*  EDUCATION  */
        .education-section { padding: 50px 0; position: relative; }
        .timeline { position: relative; max-width: 800px; margin: 0 auto; border-left: 3px solid rgba(255, 255, 255, 0.2); padding-left: 30px; }
        .timeline-item { position: relative; margin-bottom: 40px; }
        .timeline-item::before { content: ''; position: absolute; left: -39px; top: 0; width: 16px; height: 16px; border-radius: 50%; background-color: #ff0000; border: 3px solid #000; box-shadow: 0 0 10px #ff0000; }
        .edu-card { background-color: rgba(0, 0, 0, 0.6); border: 1px solid rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 10px; transition: 0.3s; }
        .edu-card:hover { border-color: #ff0000; background-color: rgba(0, 0, 0, 0.8); transform: translateX(10px); }
        .edu-year { color: #ff0000; font-weight: 800; font-size: 0.9rem; letter-spacing: 1px; margin-bottom: 5px; }
        .edu-school { font-weight: 700; font-size: 1.3rem; color: white; margin-bottom: 5px; }
        .edu-major { color: #ccc; font-style: italic; margin-bottom: 10px; font-size: 0.95rem; }
        .edu-desc { color: #aaa; font-size: 0.9rem; line-height: 1.5; }

        /*  EXPERIENCE  */
        .experience-section { padding: 80px 0; border-top: 1px solid rgba(255, 255, 255, 0.1); }
        .exp-card { position: relative; z-index: 1; overflow: hidden; background-size: cover; background-position: center; border: 1px solid rgba(255, 255, 255, 0.5); border-radius: 15px; padding: 40px 30px; text-align: center; transition: all 0.4s ease; cursor: pointer; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.5); }
        .exp-card::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.75); z-index: -1; transition: 0.4s; }
        .exp-card:hover { transform: translateY(-10px); border-color: #ff0000; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 0 20px rgba(255, 0, 0, 0.4), inset 0 0 15px rgba(255, 0, 0, 0.2); }
        .exp-card:hover::before { background-color: rgba(0, 0, 0, 0.4); }
        .exp-card:hover .exp-icon { transform: scale(1.1); text-shadow: 0 0 10px rgba(255, 0, 0, 0.8); }
        .exp-org { background-image: url('<?php echo e(asset('images/organisasi.jpg')); ?>'); }
        .exp-panitia { background-image: url('<?php echo e(asset('images/kepanitiaan.jpg')); ?>'); }
        .exp-magang { background-image: url('<?php echo e(asset('images/magang.jpg')); ?>'); }
        .exp-icon { font-size: 3rem; color: #ff0000; margin-bottom: 20px; }
        .exp-title { font-weight: 800; text-transform: uppercase; color: white; margin-bottom: 10px; letter-spacing: 1px; }
        .exp-desc { font-size: 0.9rem; color: #ccc; margin-bottom: 20px; line-height: 1.5; }
        .click-hint { font-size: 0.75rem; color: #666; font-style: italic; margin-top: auto; }

        /*  CONTACT & FOOTER  */
        .contact-section { margin-top: 80px; padding-top: 50px; border-top: 1px solid rgba(255, 255, 255, 0.1); }
        .form-control { background-color: rgba(0, 0, 0, 0.5); border: 1px solid #333; color: white; border-radius: 10px; padding: 15px; }
        .form-control:focus { background-color: rgba(0, 0, 0, 0.8); color: white; border-color: #ff0000; box-shadow: 0 0 10px rgba(255, 0, 0, 0.3); }
        ::placeholder { color: #888 !important; }

        .footer-section { background-color: transparent; padding: 50px 0; text-align: center; margin-top: 50px; border-top: 1px solid rgba(255,255,255,0.1); }
        .social-icons { display: flex; justify-content: center; gap: 30px; margin-bottom: 20px; }
        .social-item { display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; border: 2px solid #333; border-radius: 50%; color: white; font-size: 1.5rem; text-decoration: none; transition: all 0.4s ease; }
        .social-item:hover { background-color: #ff0000; border-color: #ff0000; color: white; transform: translateY(-5px); box-shadow: 0 0 15px rgba(255, 0, 0, 0.6); }
        .copyright { margin-top: 40px; color: #555; font-size: 0.8rem; }

        .modal-content { background-color: rgba(10, 10, 10, 0.95); color: white; border: 1px solid #ff0000; backdrop-filter: blur(10px); }
        .modal-header, .modal-footer { border-color: #333; }
        .modal-title { color: #ff0000; font-weight: 800; text-transform: uppercase; }
        .btn-close { filter: invert(1); }
        .modal-body-text { font-size: 1rem; line-height: 1.8; white-space: pre-line; color: #ddd; text-align: left; }
        
        @media (max-width: 768px) { .profile-img { width: 250px; height: 250px; margin-bottom: 30px; } .about-header { text-align: center; } }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand-btn" href="<?php echo e(route('home')); ?>">JANPORTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a></li>
                    
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="<?php echo e(route('about')); ?>">About Me</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#section-profile">Profile</a></li>
                            <li><a class="dropdown-item" href="#section-education">Education</a></li>
                            <li><a class="dropdown-item" href="#section-experience">Experience</a></li>
                            <li><a class="dropdown-item" href="#section-contact">Contact</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('projects')); ?>">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('skill')); ?>">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('product')); ?>">Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">

        <header class="about-header">
            <div class="container" data-aos="fade-down" data-aos-duration="1000">
                <h1 class="page-title">About <span>Jan</span></h1>
                <p class="page-subtitle">Agar dapat terpikat mari kenali lebih dekat</p>
            </div>
        </header>

        <div class="container pb-5" id="section-profile">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center" data-aos="fade-right" data-aos-delay="200">
                    <div class="profile-container">
                        <img src="<?php echo e(asset('images/profile.jpg')); ?>" class="profile-img" alt="Foto Profil">
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="400">
                    <div class="bio-card">
                        <p class="bio-intro"><?php echo e($profile->description ?? 'Data deskripsi belum diisi.'); ?></p>
                        <table class="table table-borderless table-bio">
                            <tbody>
                                <tr><td class="label-bio">Nama Lengkap</td><td>: <?php echo e($profile->name ?? '-'); ?></td></tr>
                                <tr><td class="label-bio">Tempat, Tgl Lahir</td><td>: <?php echo e($profile->birth_date ?? '-'); ?></td></tr>
                                <tr><td class="label-bio">Alamat</td><td>: <?php echo e($profile->address ?? '-'); ?></td></tr>
                                <tr><td class="label-bio">Email</td><td>: <?php echo e($profile->email ?? '-'); ?></td></tr>
                                <tr><td class="label-bio">Pendidikan</td><td>: <?php echo e($profile->education ?? '-'); ?></td></tr>
                                <tr><td class="label-bio">Hobi</td><td>: <?php echo e($profile->hobby ?? '-'); ?></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <section class="education-section" id="section-education">
            <div class="container">
                <h2 class="text-center fw-bold mb-5 text-uppercase" style="letter-spacing: 2px;" data-aos="fade-down">
                    Jan <span style="color: #ff0000;">Education</span>
                </h2>
                <div class="timeline">
                    <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="edu-card">
                            <div class="edu-year"><i class="fas fa-calendar-alt me-2"></i><?php echo e($edu->year); ?></div>
                            <h3 class="edu-school"><?php echo e($edu->school); ?></h3>
                            <?php if($edu->major): ?><div class="edu-major"><?php echo e($edu->major); ?></div><?php endif; ?>
                            <p class="edu-desc"><?php echo e($edu->description); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        <section class="experience-section" id="section-experience">
            <div class="container">
                <h2 class="text-center fw-bold mb-5 text-uppercase" style="letter-spacing: 2px;" data-aos="fade-down">Jan <span style="color: #ff0000;">Experience</span></h2>
                <div class="row g-4">
                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#modalOrg" data-aos="fade-up" data-aos-delay="100">
                        <div class="exp-card exp-org">
                            <i class="fas fa-users exp-icon"></i>
                            <h4 class="exp-title">Organisasi</h4>
                            <p class="exp-desc"><?php echo e($experience->organization_summary ?? 'Belum ada data.'); ?></p>
                            <p class="click-hint">Klik untuk detail Organisasi</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#modalPanitia" data-aos="fade-up" data-aos-delay="300">
                        <div class="exp-card exp-panitia">
                            <i class="fas fa-clipboard-check exp-icon"></i>
                            <h4 class="exp-title">Kepanitiaan</h4>
                            <p class="exp-desc"><?php echo e($experience->committee_summary ?? 'Belum ada data.'); ?></p>
                            <p class="click-hint">Klik untuk detail Kepanitiaan</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#modalMagang" data-aos="fade-up" data-aos-delay="500">
                        <div class="exp-card exp-magang">
                            <i class="fas fa-briefcase exp-icon"></i>
                            <h4 class="exp-title">Magang</h4>
                            <p class="exp-desc"><?php echo e($experience->internship_summary ?? 'Belum ada data.'); ?></p>
                            <p class="click-hint">Klik untuk detail Magang</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container contact-section pb-5" id="section-contact" data-aos="zoom-in-up" data-aos-duration="1000">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center fw-bold mb-4 text-uppercase">Ada Apa <span style="color: #ff0000;">Kak?</span></h2>
                    <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show bg-dark text-white border-success" role="alert">
                        <i class="fas fa-check-circle me-2 text-success"></i> <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('contact.send')); ?>" method="POST">
                        <?php echo csrf_field(); ?> <div class="row">
                            <div class="col-md-6 mb-3"><input type="text" name="name" class="form-control" placeholder="Siapa Namanya?" required></div>
                            <div class="col-md-6 mb-3"><input type="email" name="email" class="form-control" placeholder="Apa Emailnya?" required></div>
                        </div>
                        <div class="mb-3"><textarea name="message" rows="5" class="form-control" placeholder="Deeptalknya kakak..." required></textarea></div>
                        <div class="text-center"><button type="submit" class="btn btn-danger px-5 py-2 fw-bold rounded-pill"><i class="fas fa-paper-plane me-2"></i> Kirim Pesan</button></div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer-section" data-aos="fade-up">
            <div class="container">
                <div class="social-icons">
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($item->url); ?>" class="social-item" title="<?php echo e($item->platform); ?>" target="_blank"><i class="<?php echo e($item->icon); ?>"></i></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <p class="copyright">&copy; 2025 JanPorto.</p>
            </div>
        </footer>

    </div> 

    <div class="modal fade" id="modalOrg" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fas fa-users me-2"></i> Riwayat Organisasi</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body modal-body-text"><?php echo e($experience->organization_detail ?? '-'); ?></div></div></div></div>
    <div class="modal fade" id="modalPanitia" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fas fa-clipboard-check me-2"></i> Riwayat Kepanitiaan</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body modal-body-text"><?php echo e($experience->committee_detail ?? '-'); ?></div></div></div></div>
    <div class="modal fade" id="modalMagang" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fas fa-briefcase me-2"></i> Pengalaman Kerja / Magang</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body modal-body-text"><?php echo e($experience->internship_detail ?? '-'); ?></div></div></div></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ duration: 1000, once: true }); </script>
</body>
</html><?php /**PATH C:\laragon\www\ProjekDW\resources\views/about.blade.php ENDPATH**/ ?>