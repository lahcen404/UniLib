
<body class="bg-pattern min-h-screen flex items-center justify-center p-4 md:p-8">

    <!-- MAIN AUTH CARD -->
    <div class="max-w-5xl w-full bg-white rounded-[3rem] shadow-2xl shadow-slate-200 overflow-hidden flex flex-col md:flex-row border border-slate-100">
        
        <!-- LEFT SIDE: CREATIVE IMAGE SIDE -->
        <div class="md:w-5/12 relative min-h-[350px] md:min-h-0 overflow-hidden bg-slate-900">
            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&q=80&w=1200" 
                 class="absolute inset-0 w-full h-full object-cover opacity-60" alt="Join Library">
            
            <!-- Branding Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent p-12 flex flex-col justify-between">
                <a href="index.php" class="flex items-center space-x-3 group">
                    <div class="bg-white/10 backdrop-blur-md p-2.5 rounded-xl border border-white/20 transition-transform group-hover:rotate-12">
                        <i class="fas fa-university text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-white tracking-tight">Uni<span class="text-blue-300">Lib</span></span>
                </a>

                <div class="animate-float">
                    <div class="w-12 h-1 bg-blue-400 rounded-full mb-6"></div>
                    <h2 class="text-4xl font-extrabold text-white mb-4 leading-tight">Begin Your <br><span class="text-blue-300">Adventure.</span></h2>
                    <p class="text-blue-100/70 text-sm font-medium leading-relaxed max-w-xs">
                        Create your account to unlock personalized recommendations, borrow books instantly, and track your reading progress.
                    </p>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE: REGISTRATION FORM -->
        <div class="md:w-7/12 p-8 md:p-16 flex flex-col justify-center bg-white">
            
            <div class="mb-10">
                <div class="flex items-center space-x-2 mb-2">
                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-widest">New Member</span>
                </div>
                <h1 class="text-4xl font-black text-slate-900 mb-3 tracking-tight">Create Account</h1>
                <p class="text-slate-500 font-medium">Join our community of over 5,000 readers.</p>
            </div>

            <form action="#" class="space-y-5">
                <!-- Name Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="firstName" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="John" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold reg-input" required>
                    </div>
                    <div class="space-y-2">
                        <label for="lastName" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Doe" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold reg-input" required>
                    </div>
                </div>

                <!-- Email Field -->
                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Email *</label>
                    <div class="relative group">
                        <input type="email" id="email" name="email" placeholder="john.doe@university.edu" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold reg-input pr-12 group-hover:border-slate-200" required>
                        <i class="fas fa-envelope absolute right-6 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-blue-600 transition-colors"></i>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <label for="password" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Password *</label>
                    <div class="relative group">
                        <input type="password" id="password" name="password" placeholder="Create a strong password" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold reg-input pr-12 group-hover:border-slate-200" required>
                        <i class="fas fa-lock absolute right-6 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-blue-600 transition-colors"></i>
                    </div>
                </div>

                <!-- Terms -->
                <div class="flex items-start space-x-3 px-1 pt-2">
                    <input type="checkbox" id="terms" class="mt-1 w-5 h-5 rounded-lg border-slate-200 text-blue-600 focus:ring-blue-500 cursor-pointer" required>
                    <label for="terms" class="text-xs font-semibold text-slate-500 leading-relaxed cursor-pointer select-none">
                        I agree to the <span class="text-blue-600 underline">Terms of Service</span> and acknowledge the library's borrowing policies.
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="w-full py-5 bg-blue-600 text-white text-lg font-bold rounded-[1.5rem] hover:bg-blue-700 transition shadow-2xl shadow-blue-500/30 transform active:scale-[0.98] flex items-center justify-center">
                        Register Now <i class="fas fa-user-plus ml-3 text-sm opacity-50"></i>
                    </button>
                </div>
            </form>

            <!-- Footer Links -->
            <div class="mt-12 pt-8 border-t border-slate-50 flex flex-col sm:flex-row items-center justify-between gap-6">
                <p class="text-slate-500 font-semibold text-sm">
                    Already a member? 
                    <a href="login.html" class="text-blue-600 font-black hover:underline ml-1">Log In</a>
                </p>
                <div class="flex space-x-5">
                    <a href="#" class="text-slate-300 hover:text-blue-600 transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-slate-300 hover:text-blue-600 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-slate-300 hover:text-blue-600 transition"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

</body>
