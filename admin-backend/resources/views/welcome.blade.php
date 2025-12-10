<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantai Manggar Segarasari - Destinasi Wisata Keluarga di Balikpapan</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #0ea5e9;  /* Sky blue */
            --secondary: #06b6d4; /* Cyan */
            --accent: #f59e0b;   /* Amber */
            --dark: #1e293b;     /* Slate-800 */
            --light: #f8fafc;    /* Slate-50 */
        }
        
        body { 
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            scroll-behavior: smooth;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Font Playfair Display untuk semua heading dan elemen penting */
        h1, h2, h3, h4, h5, h6,
        .font-elegant,
        .section-title,
        .hero h2,
        footer h4,
        header h1,
        .footer-title,
        .navbar-brand,
        .subsection-title,
        .gallery-title,
        .contact-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        
        /* Header Styling - DIPERBAIKI */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 50;
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            width: 100%;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0ea5e9;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-links {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }
        
        .navbar-links a {
            color: #374151;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            white-space: nowrap;
            font-family: 'Inter', sans-serif;
        }
        
        .navbar-links a:hover {
            color: #0ea5e9;
        }
        
        /* Logo Styling */
        .logo {
            height: 40px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) saturate(100%) invert(33%) sepia(75%) saturate(1200%) hue-rotate(170deg) brightness(90%) contrast(90%);
            transition: all 0.3s ease;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        .footer-logo {
            height: 35px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) saturate(100%) invert(100%);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(14, 165, 233, 0.7), rgba(6, 182, 212, 0.7)), url('/images/Pantai Manggar.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-top: 0;
        }
        
        .hero-content {
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
        }
        
        .hero h2 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }
        
        .hero p {
            font-size: clamp(1.1rem, 2vw, 1.5rem);
            font-weight: 300;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            font-family: 'Inter', sans-serif;
        }
        
        /* CTA Button */
        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, var(--accent), #fbbf24);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(245, 158, 11, 0.4);
            border: 2px solid transparent;
            font-family: 'Inter', sans-serif;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(245, 158, 11, 0.5);
            background: linear-gradient(135deg, #fbbf24, var(--accent));
        }
        
        /* Section Styling */
        section {
            padding: 80px 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            width: 100%;
        }
        
        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 600;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--dark);
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        /* Sub-section titles juga pakai font Playfair Display */
        .subsection-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 1.5rem;
        }
        
        /* Card Styling */
        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }
        
        /* Table Styling */
        .pricing-table {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        
        .pricing-table th {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            font-weight: 600;
            padding: 20px;
            text-align: center;
            font-family: 'Inter', sans-serif;
        }
        
        .pricing-table td {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
            font-family: 'Inter', sans-serif;
        }
        
        .pricing-table tr:last-child td {
            border-bottom: none;
        }
        
        /* Facility Cards */
        .facility-card {
            text-align: center;
            padding: 40px 20px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #f8fafc;
        }
        
        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(14, 165, 233, 0.15);
        }
        
        .facility-card i {
            font-size: 3rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1rem;
        }
        
        .facility-card h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .facility-card p {
            font-family: 'Inter', sans-serif;
        }
        
        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            aspect-ratio: 4/3;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }
        
        /* Social Media Cards */
        .social-card {
            display: flex;
            align-items: center;
            padding: 20px;
            border-radius: 15px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .social-card:hover {
            transform: translateX(10px);
            text-decoration: none;
            color: white;
        }
        
        .whatsapp-card {
            background: linear-gradient(135deg, #25D366, #128C7E);
        }
        
        .instagram-card {
            background: linear-gradient(135deg, #E1306C, #C13584);
        }
        
        .facebook-card {
            background: linear-gradient(135deg, #4267B2, #365899);
        }
        
        /* Form Styling */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
            font-family: 'Inter', sans-serif;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
            font-family: 'Inter', sans-serif;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(14, 165, 233, 0.3);
        }

        /* Admin Button Styling */
        .admin-btn {
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
            font-family: 'Inter', sans-serif;
        }
        
        .admin-login {
            background: linear-gradient(135deg, var(--accent), #fbbf24);
            color: white;
        }
        
        .admin-login:hover {
            background: linear-gradient(135deg, #fbbf24, var(--accent));
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
        }
        
        .admin-dashboard {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }
        
        .admin-dashboard:hover {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(14, 165, 233, 0.3);
        }
        
        .admin-logout {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
        }
        
        .admin-logout:hover {
            background: linear-gradient(135deg, #dc2626, #ef4444);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(239, 68, 68, 0.3);
        }
        
        /* Map Container */
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 400px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* Footer Styling - DIPERBAIKI */
        footer {
            background: linear-gradient(135deg, var(--dark), #334155);
            color: white;
            width: 100%;
            margin-top: auto;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            width: 100%;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }
        
        .footer-section {
            display: flex;
            flex-direction: column;
        }
        
        .footer-section h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }
        
        .footer-bottom {
            border-top: 1px solid #374151;
            padding: 1.5rem 0;
            text-align: center;
            width: 100%;
        }
        
        .footer-bottom p {
            font-family: 'Inter', sans-serif;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }
        
        /* Mobile Menu */
        #mobile-menu {
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            width: 100%;
        }
        
        .mobile-menu-content {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .mobile-menu-content a {
            display: block;
            padding: 0.75rem 1rem;
            text-align: center;
            border-radius: 0.5rem;
            color: #374151;
            text-decoration: none;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }
        
        .mobile-menu-content a:hover {
            background-color: #f0f9ff;
            color: #0ea5e9;
        }
        
        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
        }
        
        /* Wave Divider */
        .wave-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }
        
        .wave-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 70px;
        }
        
        .wave-divider .shape-fill {
            fill: #FFFFFF;
        }
        
        /* Floating Elements */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, 15px); }
            100% { transform: translate(0, -0px); }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            section {
                padding: 60px 0;
            }
            
            .hero {
                height: 70vh;
                min-height: 500px;
                background-attachment: scroll;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .section-title {
                font-size: clamp(1.8rem, 4vw, 2.5rem);
            }
            
            .logo {
                height: 35px;
            }
            
            .admin-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .navbar-links {
                display: none;
            }
        }
        
        @media (min-width: 769px) {
            #mobile-menu-button {
                display: none;
            }
        }
        
        @media (max-width: 480px) {
            .hero {
                height: 60vh;
                min-height: 400px;
            }
            
            .cta-button {
                padding: 12px 30px;
                font-size: 1rem;
            }
            
            .hero h2 {
                font-size: clamp(2rem, 5vw, 3rem);
            }
            
            .logo {
                height: 30px;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- HEADER YANG SUDAH DIPERBAIKI -->
    <header class="fixed w-full z-50 transition-all duration-300">
        <div class="header-container">
            <div class="header-content">
                <a href="#" class="navbar-brand">
                    <i class="fas fa-umbrella-beach mr-2"></i> Pantai Manggar Segarasari
                </a>

                <nav class="navbar-links">
                    <a href="#tentang" class="text-slate-700 hover:text-sky-500 font-medium transition duration-150">Tentang Kami</a>
                    <a href="#tarif" class="text-slate-700 hover:text-sky-500 font-medium transition duration-150">Tarif & Fasilitas</a>
                    <a href="#galeri" class="text-slate-700 hover:text-sky-500 font-medium transition duration-150">Galeri</a>
                    <a href="#masukan" class="text-slate-700 hover:text-sky-500 font-medium transition duration-150">Kontak & Masukan</a>
                    
                    <!-- TOMBOL DINAMIS BERDASARKAN STATUS LOGIN -->
                    <div class="flex items-center space-x-3 admin-buttons">
                        @auth
                            <!-- Jika sudah login, tampilkan Dashboard dan Logout -->
                            <a href="/dashboard" class="admin-btn admin-dashboard">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" class="admin-btn admin-logout">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </button>
                            </form>
                        @else
                            <!-- Jika belum login, tampilkan Login Admin -->
                            <a href="/login" class="admin-btn admin-login">
                                <i class="fas fa-user-circle"></i>
                                Login Admin
                            </a>
                        @endauth
                    </div>
                </nav>
                
                <button id="mobile-menu-button" class="md:hidden text-slate-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="mobile-menu-content">
                <a href="#tentang" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-sky-50 hover:text-sky-700">Tentang Kami</a>
                <a href="#tarif" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-sky-50 hover:text-sky-700">Tarif & Fasilitas</a>
                <a href="#galeri" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-sky-50 hover:text-sky-700">Galeri</a>
                <a href="#masukan" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-sky-50 hover:text-sky-700">Kontak & Masukan</a>
                
                <!-- TOMBOL DINAMIS UNTUK MOBILE -->
                @auth
                    <a href="/dashboard" class="block px-3 py-2 bg-gradient-to-r from-sky-500 to-sky-600 text-white rounded-full hover:from-sky-600 hover:to-sky-700 text-center font-semibold">
                        <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="w-full px-3 py-2 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-full hover:from-red-600 hover:to-red-700 text-center font-semibold">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </button>
                    </form>
                @else
                    <a href="/login" class="block px-3 py-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-full hover:from-amber-600 hover:to-amber-700 text-center font-semibold">
                        <i class="fas fa-user-circle mr-2"></i>Login Admin
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow pt-16">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content animate-fadeInUp">
                <h2 class="font-elegant">Selamat Datang di Pantai Manggar</h2>
                <p>Nikmati Keindahan Alam dan Suasana Keluarga di Balikpapan Timur</p>
                <a href="#tentang" class="cta-button">
                    <i class="fas fa-arrow-down mr-2"></i>Jelajahi Sekarang
                </a>
            </div>
            
            <!-- Wave Divider -->
            <div class="wave-divider">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <!-- About Section -->
        <section id="tentang" class="bg-white">
            <div class="container">
                <h3 class="section-title">Mengenal Pantai Manggar Segarasari</h3>

                <div class="md:flex md:space-x-12 items-start pt-6">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Pantai Manggar Segarasari, terletak di Balikpapan Timur, adalah salah satu destinasi wisata pantai paling populer dan ramah keluarga di Kalimantan Timur. Dikenal dengan garis pantai yang panjang, ombak yang tenang, dan pasir putih kecoklatan yang bersih, pantai ini menawarkan tempat pelarian sempurna dari hiruk pikuk kota.
                        </p>
                        <p class="text-gray-700 text-lg leading-relaxed mb-6">
                            Kami menyediakan berbagai fasilitas seperti pondok, area bermain, dan spot kuliner lokal yang akan membuat pengalaman liburan Anda semakin berkesan.
                        </p>
                        <div class="text-lg leading-relaxed mb-6 border-l-4 border-sky-500 pl-4 italic bg-sky-50 p-4 rounded-xl shadow-inner">
                            <p class="font-semibold text-sky-800">Visi Kami:</p>
                            <p class="text-gray-700">Menjadikan Pantai Manggar sebagai ikon wisata alam Balikpapan yang berkelanjutan, menjaga keasrian lingkungan, dan memberikan pengalaman rekreasi terbaik bagi setiap pengunjung dengan standar pelayanan kelas dunia.</p>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <div class="overflow-hidden rounded-xl shadow-2xl card transition duration-500">
                            <img 
                                src="/images/Sunset 2.jpg" 
                                alt="Pemandangan Pantai Manggar Segarasari saat sore hari" 
                                class="w-full h-auto object-cover"
                                onerror="this.onerror=null;this.src='https://placehold.co/800x600/CCCCCC/000000?text=Gagal+Memuat+Foto';"
                            >
                        </div>
                        <p class="text-center text-sm text-gray-600 mt-3 italic p-2 bg-gray-100 rounded-lg">
                            Suasana matahari terbenam yang memukau, momen favorit pengunjung di sore hari.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Pricing & Facilities Section -->
        <section id="tarif" class="py-20 bg-sky-50">
            <div class="container">
                <h3 class="section-title">Harga Tiket & Fasilitas</h3>

                <!-- Tabel Harga Tiket - MENGINTEGRASIKAN DATA DARI ADMIN -->
                <div class="overflow-x-auto pricing-table transform transition duration-300 mb-16">
                    <table class="min-w-full bg-white rounded-2xl">
                        <thead>
                            <tr class="shadow-inner">
                                <th class="py-4 px-6 text-left text-lg font-bold rounded-tl-2xl">Item</th>
                                <th class="py-4 px-6 text-center text-lg font-bold">Hari Kerja (Weekday)</th>
                                <th class="py-4 px-6 text-center text-lg font-bold rounded-tr-2xl">Akhir Pekan (Weekend/Libur)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @if($tarifs->count() > 0)
                                @foreach($tarifs as $index => $tarif)
                                    <tr class="{{ $index % 2 === 1 ? 'bg-sky-50' : '' }}">
                                        <td class="py-4 px-6 text-left font-medium text-gray-900">{{ $tarif->item_name }}</td>
                                        <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp {{ number_format($tarif->price_weekday, 0, ',', '.') }}</td>
                                        <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp {{ number_format($tarif->price_weekend, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- Fallback data jika belum ada tarif di database -->
                                <tr>
                                    <td class="py-4 px-6 text-left font-medium text-gray-900">Tiket Masuk Dewasa</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 5.000</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 10.000</td>
                                </tr>
                                <tr class="bg-sky-50">
                                    <td class="py-4 px-6 text-left font-medium text-gray-900">Parkir Roda 2</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 2.000</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 3.000</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-6 text-left font-medium text-gray-900">Parkir Roda 4</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 5.000</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 10.000</td>
                                </tr>
                                <tr class="bg-sky-50">
                                    <td class="py-4 px-6 text-left font-medium text-gray-900">Penyewaan Pondok Kecil</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 50.000</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 75.000</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-6 text-left font-medium text-gray-900">Penyewaan Pondok Besar</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 100.000</td>
                                    <td class="py-4 px-6 text-center text-gray-700 font-semibold">Rp 150.000</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <!-- Fasilitas Utama -->
                <div class="mt-12">
                    <h4 class="subsection-title text-center">Fasilitas Utama</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="facility-card">
                            <i class="fas fa-umbrella-beach"></i>
                            <h5>Penyewaan Pondok</h5>
                            <p class="text-sm text-gray-500">Tersedia banyak pondok keluarga untuk bersantai.</p>
                        </div>
                        <div class="facility-card">
                            <i class="fas fa-utensils"></i>
                            <h5>Pusat Kuliner</h5>
                            <p class="text-sm text-gray-500">Aneka makanan laut segar dan jajanan lokal.</p>
                        </div>
                        <div class="facility-card">
                            <i class="fas fa-restroom"></i>
                            <h5>Toilet & Kamar Bilas</h5>
                            <p class="text-sm text-gray-500">Fasilitas bersih dan terawat.</p>
                        </div>
                        <div class="facility-card">
                            <i class="fas fa-ship"></i>
                            <h5>Wahana Air</h5>
                            <p class="text-sm text-gray-500">Banana boat dan perahu wisata (biaya terpisah).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section - MENGINTEGRASIKAN DATA FOTO DARI ADMIN -->
        <section id="galeri" class="py-20 bg-white">
            <div class="container">
                <h3 class="section-title">Galeri Momen Terbaik</h3>

                @if($fotos->count() > 0)
                    <div class="gallery-grid">
                        @foreach($fotos as $foto)
                            @php
                                // Bersihkan path dan buat URL yang benar
                                $cleanPath = ltrim(str_replace(['/storage/', 'storage/'], '', $foto->path), '/');
                                $imagePath = $cleanPath ? asset('storage/' . $cleanPath) : null;
                            @endphp

                            @if($imagePath)
                                <div class="gallery-item">
                                    <img 
                                        src="{{ $imagePath }}" 
                                        alt="{{ $foto->judul }}" 
                                        class="transition duration-500"
                                        onerror="this.onerror=null;this.src='https://placehold.co/600x400/CCCCCC/000000?text=Gagal+Memuat+Foto';"
                                    >
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white text-left">
                                        <p class="gallery-title">{{ $foto->judul ?: 'Foto Pantai Manggar' }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="gallery-item">
                                    <img 
                                        src="https://placehold.co/600x400/CCCCCC/000000?text=Gagal+Memuat+Foto" 
                                        alt="Foto tidak tersedia" 
                                        class="transition duration-500"
                                    >
                                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white text-left">
                                        <p class="gallery-title">Foto tidak tersedia</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @else
                    <!-- Fallback gallery jika belum ada foto di database -->
                    <div class="gallery-grid">
                        <div class="gallery-item">
                            <img 
                                src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                alt="Suasana Pantai Manggar di pagi hari" 
                            >
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white text-left">
                                <p class="gallery-title">Suasana Pagi Hari di Pantai</p>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img 
                                src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                alt="Aktivitas keluarga di pantai" 
                            >
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white text-left">
                                <p class="gallery-title">Aktivitas Keluarga</p>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img 
                                src="https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                alt="Matahari terbenam di Pantai Manggar" 
                            >
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white text-left">
                                <p class="gallery-title">Matahari Terbenam</p>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img 
                                src="https://images.unsplash.com/photo-1571898223451-8e30f8c5e6c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                                alt="Pondok dan fasilitas pantai" 
                            >
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white text-left">
                                <p class="gallery-title">Fasilitas Pondok</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>

        <!-- Contact & Feedback Section -->
        <section id="masukan" class="py-20 bg-sky-50">
            <div class="container">
                <h3 class="section-title">Lokasi dan Masukan Anda</h3>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                    
                    <div class="lg:col-span-2">
                        <h4 class="subsection-title">Peta Lokasi Pantai Manggar Segarasari</h4>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.665518206451!2d117.1352726759795!3d-1.218524698751509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df0143890252553%3A0x89e00045e7f1c1a2!2sPantai%20Manggar%20Segara%20Sari!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>

                    <div class="lg:col-span-1">
                        <h4 class="subsection-title">Kontak Cepat & Media Sosial</h4>
                        <div class="space-y-4">
                            
                            <a href="https://wa.me/6285298416612?text=Halo%20UPTD%20Pantai%20Manggar%2C%20saya%20ingin%20bertanya%20tentang%20reservasi." 
                                target="_blank" 
                                class="social-card whatsapp-card">
                                <i class="fab fa-whatsapp text-2xl mr-4"></i>
                                <div>
                                    <p class="font-bold">WhatsApp UPTD</p>
                                    <p class="text-sm">Tanya Jawab & Informasi Tiket</p>
                                </div>
                            </a>

                            <a href="https://www.instagram.com/pantai_manggar.bpn?igsh=MXRneGJ4NTNzZzRodw==" 
                                target="_blank" 
                                class="social-card instagram-card">
                                <i class="fab fa-instagram text-2xl mr-4"></i>
                                <div>
                                    <p class="font-bold">Instagram @uptdpantaimanggar</p>
                                    <p class="text-sm">Lihat Foto Terbaru & Event</p>
                                </div>
                            </a>

                            <a href="https://www.instagram.com/kkn.navacita?igsh=MWN2dmVvcHYzMW84ag==" 
                                target="_blank" 
                                class="social-card facebook-card">
                                <i class="fab fa-instagram text-2xl mr-4"></i>
                                <div>
                                    <p class="font-bold">Instagram Navacita ITK</p>
                                    <p class="text-sm">Inovasi Sosial & Pengembangan</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- FORM MASUKAN YANG SUDAH DIPERBAIKI -->
                <div class="max-w-3xl mx-auto mt-16">
                    <h4 class="subsection-title text-center">Kirim Masukan Anda</h4>
                    
                    @if (session('success'))
                        <div id="alert-popup" class="p-4 mb-6 text-sm text-green-700 bg-green-100 rounded-lg text-center font-semibold border border-green-300">
                            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="p-4 mb-6 text-sm text-red-700 bg-red-100 rounded-lg border border-red-300">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            <span class="font-semibold">Perbaiki kesalahan berikut:</span>
                            <ul class="list-disc list-inside mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="{{ route('masukan.store') }}" method="POST" class="bg-white p-8 rounded-2xl shadow-2xl border border-sky-100">
                        @csrf
                        <div class="form-group">
                            <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap *</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap Anda" value="{{ old('nama') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="kontak" class="block text-gray-700 font-medium mb-2">Kontak (Email/Telepon) *</label>
                            <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Email atau nomor telepon yang dapat dihubungi" value="{{ old('kontak') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="jenis" class="block text-gray-700 font-medium mb-2">Jenis Masukan *</label>
                            <select name="jenis" id="jenis" class="form-control" required>
                                <option value="">Pilih jenis masukan</option>
                                <option value="Kritik" {{ old('jenis') == 'Kritik' ? 'selected' : '' }}>Kritik</option>
                                <option value="Saran" {{ old('jenis') == 'Saran' ? 'selected' : '' }}>Saran</option>
                                <option value="Pertanyaan" {{ old('jenis') == 'Pertanyaan' ? 'selected' : '' }}>Pertanyaan</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="pesan" class="block text-gray-700 font-medium mb-2">Pesan Anda *</label>
                            <textarea name="pesan" id="pesan" class="form-control" rows="5" placeholder="Tuliskan masukan, saran, atau pertanyaan Anda di sini..." required>{{ old('pesan') }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Masukan
                        </button>
                        
                        <p class="text-sm text-gray-600 mt-4 text-center">
                            * Wajib diisi. Data Anda akan kami jaga kerahasiaannya.
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER YANG SUDAH DIPERBAIKI -->
    <footer class="bg-gray-900 text-white w-full mt-auto">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4 class="flex items-center">
                        <i class="fas fa-umbrella-beach mr-2"></i> Pantai Manggar Segara sari
                    </h4>
                    <p class="text-gray-400 mt-2">Destinasi wisata pantai keluarga terbaik di Balikpapan Timur dengan fasilitas lengkap dan pemandangan yang memukau.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Kontak Kami</h4>
                    <p class="text-gray-400 mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Balikpapan Timur, Kalimantan Timur</p>
                    <p class="text-gray-400 mb-2"><i class="fas fa-phone mr-2"></i> +622351442243</p>
                    <p class="text-gray-400"><i class="fas fa-envelope mr-2"></i> info@pantaimanggar.id</p>
                </div>
                
                <div class="footer-section">
                    <h4>Jam Operasional</h4>
                    <p class="text-gray-400 mb-2">Senin - Jumat: 07:30 - 18:00</p>
                    <p class="text-gray-400 mb-2">Sabtu - Minggu: 07:00 - 18:00</p>
                    <p class="text-gray-400">Hari Libur: 07:00 - 18:00</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2025 Pantai Manggar Segara sari. Dikelola dengan semangat konservasi dan pelayanan terbaik.</p>
                <p class="text-xs text-gray-500 mt-2">Website ini hasil dari kolaborasi antara UPTD Pantai Manggar dengan Team Inovasi Sosial Navacita Institut Teknologi Kalimantan 2025.</p>
            </div>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Close mobile menu when clicking links
        document.addEventListener('DOMContentLoaded', () => {
            const mobileLinks = document.querySelectorAll('#mobile-menu a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            });
        });

        // Auto-hide alert popup
        const alertPopup = document.getElementById('alert-popup');
        if (alertPopup) {
            setTimeout(() => {
                alertPopup.style.display = 'none';
            }, 5000);
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add floating animation to some elements
        document.addEventListener('DOMContentLoaded', function() {
            const facilityCards = document.querySelectorAll('.facility-card');
            facilityCards.forEach((card, index) => {
                card.classList.add('floating');
                card.style.animationDelay = `${index * 0.2}s`;
            });
        });
    </script>
</body>
</html>