<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JANPORTO - Product</title>
    
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                              url('{{ asset('images/merah3.jpg') }}');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            scroll-behavior: smooth; 
        }

        .main-content {
            animation: fadeInUp 0.8s ease-out forwards;
            padding-top: 0px; 
        }

        /*  NAVBAR FIXED  */
        .navbar {
            position: fixed; 
            top: 20px; 
            left: 0; 
            width: 100%; 
            z-index: 9999;
            background: transparent !important; padding: 0; border: none;
        }
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
        .navbar-brand-btn:hover { 
            transform: scale(1.05); 
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.6); 
        }
        
        .navbar-nav .nav-item { 
            margin: 0 5px; 
            position: relative; 
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

        /*  DROPDOWN MENU */
        .dropdown-menu {
            display: block; opacity: 0; visibility: hidden;
            transform: translateY(20px); transition: all 0.4s ease;
            background-color: rgba(0, 0, 0, 0.9); backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px;
            padding: 10px; margin-top: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            min-width: 180px; left: 50%; transform: translateX(-50%) translateY(20px);
        }
        .nav-item:hover .dropdown-menu { 
            opacity: 1; 
            visibility: visible; 
            transform: translateX(-50%) translateY(0); 
        }
        
        .dropdown-item {
            color: #ccc !important; font-weight: 600; font-size: 0.9rem;
            padding: 10px 15px; border-radius: 10px; transition: 0.3s; text-align: center;
        }
        .dropdown-item:hover { 
            background-color: #ff0000; 
            color: white !important; 
            transform: translateX(5px); 
        }

        /* HP View */
        .navbar-toggler { background-color: rgba(0,0,0,0.8); border: none; border-radius: 50%; padding: 10px; color: white; }
        @media (max-width: 991px) {
            .navbar-collapse { margin-top: 15px; }
            .navbar-nav .nav-link { text-align: center; width: auto; display: inline-block; }
            .navbar-nav .nav-item { text-align: center; margin-bottom: 10px; }
            .dropdown-menu { position: static; opacity: 1; visibility: visible; transform: none; background: transparent; border: none; text-align: center; padding: 0; box-shadow: none; }
        }

        /*  HEADER & CONTENT  */
        .product-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.9)), 
                        url('https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1920&q=80');
            background-size: cover; background-position: center; background-attachment: fixed;
            padding: 120px 0 60px 0; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }
        .page-title { 
            font-weight: 900; 
            font-size: 3.5rem; 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            margin-bottom: 10px; color: white; 
            text-shadow: 0 5px 15px rgba(0,0,0,0.5); 
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

        #section-gallery, #section-recipe { scroll-margin-top: 120px; }

        /*  PRODUCT GALLERY  */
        .product-gallery { background-color: transparent; padding: 40px 0; }
        .product-item { position: relative; overflow: hidden; border-radius: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.5); margin: 10px; transition: transform 0.4s ease; border: 1px solid rgba(255,255,255,0.1); }
        .product-item:hover { transform: translateY(-10px); border-color: #ff0000; box-shadow: 0 15px 30px rgba(255, 0, 0, 0.3); }
        .product-img { width: 100%; height: 250px; object-fit: cover; transition: transform 0.5s ease; filter: brightness(0.9); }
        .product-item:hover .product-img { transform: scale(1.1); filter: brightness(1.1); }
        .product-name { position: absolute; bottom: 0; left: 0; width: 100%; background: linear-gradient(to top, #000 0%, transparent 100%); color: white; text-align: center; padding: 20px 0 10px 0; font-weight: 800; font-size: 1.2rem; text-transform: uppercase; z-index: 2; text-shadow: 0 2px 5px rgba(0,0,0,0.8); }

        /*  RECIPE SECTION  */
        .recipe-section { background-color: transparent; padding: 40px 0; border-top: none; }
        .section-title { color: #ff0000; font-weight: 900; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 40px; text-align: center; text-shadow: 0 5px 10px rgba(0,0,0,0.5); }
        .recipe-card { background-color: rgba(0, 0, 0, 0.6); backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 40px 20px; height: 100%; border-radius: 20px; transition: 0.3s; cursor: pointer; position: relative; overflow: hidden; }
        .recipe-card:hover { border-color: #ff0000; background-color: rgba(0, 0, 0, 0.8); transform: translateY(-5px); box-shadow: 0 0 20px rgba(255, 0, 0, 0.2); }
        .recipe-icon { font-size: 3rem; color: #ff0000; margin-bottom: 20px; filter: drop-shadow(0 0 10px rgba(255,0,0,0.5)); }
        .recipe-heading { font-weight: 700; color: white; text-transform: uppercase; margin-bottom: 10px; }
        .click-hint { color: #aaa; font-size: 0.8rem; font-style: italic; }

        /* MODAL */
        .modal-content { background-color: rgba(10, 10, 10, 0.95); color: white; border: 1px solid #ff0000; backdrop-filter: blur(10px); }
        .modal-header, .modal-footer { border-color: #333; }
        .modal-title { color: #ff0000; font-weight: 800; text-transform: uppercase; }
        .btn-close { filter: invert(1); }
        .modal-body-text { font-size: 1rem; line-height: 1.8; white-space: pre-line; color: #ddd; }

        /* FOOTER */
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
            <a class="navbar-brand-btn" href="{{ route('home') }}">JANPORTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('skill') }}">Skill</a></li>
                    
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="{{ route('product') }}">Product</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#section-gallery">Gallery</a></li>
                            <li><a class="dropdown-item" href="#section-recipe">Recipe</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="main-content">

        <div class="product-header">
            <div class="container">
                <h1 class="page-title" data-aos="zoom-out" data-aos-duration="1200">Jan <span>Product</span></h1>
                <p class="page-subtitle" data-aos="fade-up" data-aos-delay="300">Culinary &bull; Waffle &bull; Homemade</p>
            </div>
        </div>

        <div class="container product-gallery" id="section-gallery">
            <div class="row"> 
                @foreach($products as $index => $item)
                <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="product-item">
                        <img src="{{ $item->image }}" class="product-img" alt="{{ $item->name }}">
                        <div class="product-name">{{ $item->name }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <section class="recipe-section" id="section-recipe">
            <div class="container">
                <h2 class="section-title" data-aos="fade-down">The Secret Recipe</h2>
                <div class="row g-4">
                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#modalAlat" data-aos="fade-right" data-aos-delay="200">
                        <div class="recipe-card text-center">
                            <i class="fas fa-tools recipe-icon"></i>
                            <h4 class="recipe-heading">Alat</h4>
                            <p class="click-hint">Klik untuk melihat detail</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#modalBahan" data-aos="fade-up" data-aos-delay="400">
                        <div class="recipe-card text-center">
                            <i class="fas fa-egg recipe-icon"></i>
                            <h4 class="recipe-heading">Bahan</h4>
                            <p class="click-hint">Klik untuk melihat detail</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-bs-toggle="modal" data-bs-target="#modalLangkah" data-aos="fade-left" data-aos-delay="600">
                        <div class="recipe-card text-center">
                            <i class="fas fa-list-ol recipe-icon"></i>
                            <h4 class="recipe-heading">Langkah</h4>
                            <p class="click-hint">Klik untuk melihat detail</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-section" data-aos="fade-up" data-aos-offset="10">
            <div class="container">
                <div class="social-icons">
                    @foreach($socials as $item)
                    <a href="{{ $item->url }}" class="social-item" title="{{ $item->platform }}" target="_blank">
                        <i class="{{ $item->icon }}"></i>
                    </a>
                    @endforeach
                </div>
                <p class="copyright">&copy; 2025 JanPorto.</p>
            </div>
        </footer>

    </div> 

    <div class="modal fade" id="modalAlat" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fas fa-tools me-2"></i> Alat Yang Dibutuhkan</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body modal-body-text">{{ $recipe->tools ?? 'Data belum tersedia.' }}</div></div></div></div>
    <div class="modal fade" id="modalBahan" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fas fa-egg me-2"></i> Bahan-Bahan</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body modal-body-text">{{ $recipe->ingredients ?? 'Data belum tersedia.' }}</div></div></div></div>
    <div class="modal fade" id="modalLangkah" tabindex="-1" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fas fa-list-ol me-2"></i> Cara Membuat</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body modal-body-text">{{ $recipe->steps ?? 'Data belum tersedia.' }}</div></div></div></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ duration: 1000, once: true }); </script>
</body>
</html>