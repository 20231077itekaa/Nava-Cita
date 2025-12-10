<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Pantai Manggar Segarasari</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Custom Styles - Senada dengan halaman utama */
        :root {
            --primary: #0ea5e9;  /* Sky blue */
            --secondary: #06b6d4; /* Cyan */
            --accent: #f59e0b;   /* Amber */
            --dark: #1e293b;     /* Slate-800 */
            --light: #f8fafc;    /* Slate-50 */
        }
        
        body { 
            font-family: 'Inter', sans-serif;
            background: linear-gradient(rgba(14, 165, 233, 0.7), rgba(6, 182, 212, 0.7)), url('/images/Tugu Dayak.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Login Container */
        .login-container {
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }
        
        /* Login Card Styling */
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            margin-bottom: 20px;
        }
        
        .login-card:hover {
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
        }
        
        /* Form Styling */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
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
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(14, 165, 233, 0.3);
        }
        
        /* Checkbox Styling */
        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 2px solid #d1d5db;
            transition: all 0.2s ease;
            cursor: pointer;
        }
        
        input[type="checkbox"]:checked {
            background-color: var(--primary);
            border-color: var(--primary);
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
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
        
        /* Floating Elements */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, 10px); }
            100% { transform: translate(0, -0px); }
        }
        
        /* Back Link Styling */
        .back-link {
            display: block;
            text-align: center;
            color: white;
            font-weight: 500;
            padding: 12px 20px;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            text-decoration: none;
            margin-top: 20px;
        }
        
        .back-link:hover {
            background: rgba(0, 0, 0, 0.5);
            color: #fef3c7;
            transform: translateY(-2px);
        }

        /* Fallback background jika gambar tidak ditemukan */
        .fallback-bg {
            background: linear-gradient(135deg, #0ea5e9, #06b6d4);
        }

        /* Responsive adjustments */
        @media (max-height: 700px) {
            body {
                padding: 40px 20px;
            }
            
            .login-container {
                margin-top: 20px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                max-width: 100%;
            }
            
            .login-card {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Login Container -->
    <div class="login-container animate-fadeInUp">
        <!-- Authentication Card -->
        <div class="login-card p-8 transform transition duration-500">
            
            <!-- Logo Section -->
            <div class="flex justify-center mb-8 floating">
                <div class="flex flex-col items-center space-y-3">
                    <!-- Icon dengan tema budaya Dayak -->
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shadow-lg">
                        <i class="fas fa-landmark text-white text-3xl"></i>
                    </div>
                    <div class="text-center">
                        <span class="text-2xl font-bold text-slate-800 tracking-tight">ADMIN PANEL</span>
                        <p class="text-sm text-slate-600 mt-1">Pantai Manggar Segarasari</p>
                        <p class="text-xs text-amber-600 font-medium mt-1 bg-amber-50 px-2 py-1 rounded-full">
                            <i class="fas fa-feather-alt mr-1"></i>Budaya Kalimantan
                        </p>
                    </div>
                </div>
            </div>

            <!-- Menampilkan Error Validasi dari Laravel -->
            <!--
            <?php if($errors->any()): ?>
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl text-red-700 font-medium shadow-sm">
                    <div class="font-bold mb-1 flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        Terjadi Kesalahan!
                    </div>
                    <ul class="list-disc list-inside text-sm mt-2">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            -->
            
            <!-- FORM LOGIN -->
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                
                <div class="space-y-5">
                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email" class="block font-semibold text-sm text-slate-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-amber-500"></i>Email Admin
                        </label>
                        <input id="email" 
                                class="form-control" 
                                type="email" 
                                name="email" 
                                value="<?php echo e(old('email')); ?>"
                                required 
                                autofocus 
                                autocomplete="username"
                                placeholder="masukkan email admin" />
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password" class="block font-semibold text-sm text-slate-700 mb-2">
                            <i class="fas fa-lock mr-2 text-amber-500"></i>Password
                        </label>
                        <input id="password" 
                                class="form-control" 
                                type="password" 
                                name="password" 
                                required 
                                autocomplete="current-password"
                                placeholder="masukkan password" />
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mt-6">
                    <!-- Remember Me -->
                    <div class="block">
                        <label for="remember_me" class="flex items-center cursor-pointer">
                            <input type="checkbox" id="remember_me" name="remember" class="mr-2">
                            <span class="text-sm text-slate-600 select-none">Ingat Saya</span>
                        </label>
                    </div>

                    <!-- Forgot Password Link -->
                    <a class="text-sm text-amber-600 hover:text-amber-800 font-medium transition duration-150 flex items-center" href="#">
                        <i class="fas fa-key mr-1"></i> Lupa password?
                    </a>
                </div>

                <!-- Submit Button -->
                <div class="mt-8">
                    <button type="submit" class="btn-primary flex items-center justify-center gap-2 py-3">
                        <i class="fas fa-sign-in-alt"></i>
                        Masuk ke Dashboard
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Link kembali ke halaman utama - DIPERBAIKI POSISINYA -->
        <a href="/" class="back-link">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Website Utama
        </a>
    </div>

    <script>
        // Animasi untuk form elements
        document.addEventListener('DOMContentLoaded', function() {
            const formElements = document.querySelectorAll('.form-control');
            formElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });

            // Fallback jika gambar tidak ditemukan
            const body = document.querySelector('body');
            const checkImage = new Image();
            checkImage.src = '/images/Tugu Dayak.jpeg';
            checkImage.onerror = function() {
                body.classList.add('fallback-bg');
                body.style.backgroundImage = 'none';
            };
        });

        // Efek hover untuk card
        const loginCard = document.querySelector('.login-card');
        if (loginCard) {
            loginCard.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            loginCard.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        }

        // Tambahkan efek ketik pada placeholder
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        
        if (emailInput) {
            emailInput.addEventListener('focus', function() {
                this.setAttribute('placeholder', 'contoh: email@icloud.com');
            });
            
            emailInput.addEventListener('blur', function() {
                this.setAttribute('placeholder', 'masukkan email admin');
            });
        }

        // Pastikan link kembali selalu terlihat
        function ensureBackLinkVisibility() {
            const backLink = document.querySelector('.back-link');
            const viewportHeight = window.innerHeight;
            const backLinkRect = backLink.getBoundingClientRect();
            
            if (backLinkRect.bottom > viewportHeight - 20) {
                document.body.style.paddingBottom = '40px';
            }
        }

        window.addEventListener('load', ensureBackLinkVisibility);
        window.addEventListener('resize', ensureBackLinkVisibility);
    </script>
</body>
</html><?php /**PATH C:\Users\USER\문서\Kuliah\Semester\Semester 5\Inovasi Sosial\Web kkn\admin-backend\resources\views/auth/login.blade.php ENDPATH**/ ?>