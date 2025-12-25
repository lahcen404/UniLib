<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniLab | Digital Library Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 50%, rgba(15, 23, 42, 0.4) 100%);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .image-zoom {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover .image-zoom {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col">

    <!-- NAVIGATION BAR -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-[100]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="#" class="flex items-center space-x-3 group">
                        <div class="bg-blue-600 p-2.5 rounded-xl group-hover:rotate-12 transition-transform shadow-lg shadow-blue-200">
                            <i class="fas fa-university text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-extrabold text-slate-800 tracking-tight">Uni<span class="text-blue-600">Lab</span></span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-10">
                    <a href="#" class="text-slate-600 hover:text-blue-600 font-semibold transition">Catalog</a>
                    <a href="#" class="text-slate-600 hover:text-blue-600 font-semibold transition">My Loans</a>
                    <div class="h-6 w-px bg-slate-200"></div>
                    <a href="/login" class="text-slate-700 font-bold hover:text-blue-600 transition">Log In</a>
                    <a href="/register" class="bg-slate-900 text-white px-7 py-3 rounded-full font-bold hover:bg-blue-600 transition shadow-xl shadow-slate-200">Join Library</a>
                </div>

                <div class="md:hidden flex items-center">
                    <button class="text-slate-600 text-2xl"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </nav>