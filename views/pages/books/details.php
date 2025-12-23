
    <!-- MAIN CONTENT -->
    <main class="flex-grow max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">
            
            <!-- LEFT COLUMN: COVER & STATUS -->
            <div class="relative group">
                <!-- Background Glow -->
                <div class="absolute -inset-4 bg-blue-100 rounded-[3rem] blur-3xl opacity-30"></div>
                
                <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white bg-white">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&q=80&w=1200" 
                         alt="Book Cover" class="w-full h-auto object-cover">
                    
                    <!-- Floating Badge -->
                    <div class="absolute top-6 right-6">
                        <span class="px-6 py-3 bg-green-500 text-white text-xs font-black uppercase tracking-[0.2em] rounded-full shadow-2xl shadow-green-500/40 flex items-center">
                            <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                            Available
                        </span>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: CORE DETAILS -->
            <div class="space-y-12">
                <!-- Title Section -->
                <section>
                    <h1 class="text-6xl font-black text-slate-900 mb-10 leading-[1.1] tracking-tighter">
                        Advanced <br>Quantum Mechanics
                    </h1>
                    
                    <!-- Info Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3 gap-4">
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm details-card hover:border-blue-200">
                            <p class="text-[10px] font-black text-slate-400 uppercase mb-2 tracking-[0.2em]">Publication</p>
                            <p class="font-extrabold text-slate-900 text-xl tracking-tight">2023</p>
                        </div>
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm details-card hover:border-blue-200">
                            <p class="text-[10px] font-black text-slate-400 uppercase mb-2 tracking-[0.2em]">Category</p>
                            <p class="font-extrabold text-slate-900 text-xl tracking-tight">Science</p>
                        </div>
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm details-card hover:border-green-200">
                            <p class="text-[10px] font-black text-slate-400 uppercase mb-2 tracking-[0.2em]">Availability</p>
                            <p class="font-extrabold text-green-600 text-xl tracking-tight">Available</p>
                        </div>
                    </div>
                </section>

                <!-- Borrow Action -->
                <section class="pt-4">
                    <button class="w-full py-6 bg-blue-600 text-white text-xl font-black rounded-3xl hover:bg-blue-700 transition shadow-2xl shadow-blue-500/30 flex items-center justify-center transform active:scale-[0.98] group">
                        Confirm Borrowing 
                        <i class="fas fa-arrow-right ml-4 text-blue-200 transform group-hover:translate-x-2 transition-transform"></i>
                    </button>
                    <p class="text-center mt-6 text-slate-400 text-sm font-medium italic">
                        Confirming will register this book under your active loans.
                    </p>
                </section>
            </div>
        </div>
    </main>
