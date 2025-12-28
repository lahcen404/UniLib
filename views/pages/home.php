
    <!-- HERO SECTION -->
    <header class="relative h-[650px] flex items-center overflow-hidden bg-slate-900">
        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&q=80&w=2000" 
             class="absolute inset-0 w-full h-full object-cover" alt="Library">
        <div class="absolute inset-0 hero-gradient"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <span class="inline-block px-4 py-1.5 bg-blue-500/20 border border-blue-400/30 rounded-full text-blue-400 text-sm font-bold tracking-wider mb-6">
                    DIGITAL LEARNING HUB
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 leading-[1.1]">
                    Knowledge is <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Infinite Power.</span>
                </h1>
                <p class="text-xl text-slate-300 mb-10 leading-relaxed font-light">
                    Access over 50,000 digital titles, scholarly journals, and rare manuscripts. 
                    Manage your borrowing experience with our modern, intuitive ecosystem.
                </p>
                <div class="flex flex-col sm:flex-row gap-5">
                    <button class="px-10 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-500/40 text-lg">
                        Explore Catalog <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                    <button class="px-10 py-4 glass-effect text-white font-bold rounded-2xl hover:bg-white/10 transition text-lg">
                        Research Tools
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- STATS OVERLAY -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 relative z-20">
        <div class="bg-white p-10 rounded-[2.5rem] shadow-2xl shadow-slate-200 border border-slate-100 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="text-center group">
                <div class="text-4xl font-black text-slate-900 mb-2 group-hover:text-blue-600 transition">85K+</div>
                <div class="text-sm font-bold text-slate-400 uppercase tracking-widest">Active Books</div>
            </div>
            <div class="text-center group">
                <div class="text-4xl font-black text-slate-900 mb-2 group-hover:text-blue-600 transition">15+</div>
                <div class="text-sm font-bold text-slate-400 uppercase tracking-widest">Categories</div>
            </div>
            <div class="text-center group">
                <div class="text-4xl font-black text-slate-900 mb-2 group-hover:text-blue-600 transition">2.4K</div>
                <div class="text-sm font-bold text-slate-400 uppercase tracking-widest">Members</div>
            </div>
        </div>
    </div>

    <!-- FEATURED WIDE CARDS SECTION -->
    <section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16">
            <div>
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Curated Collections</h2>
                <div class="h-1.5 w-24 bg-blue-600 rounded-full mb-6"></div>
                <p class="text-lg text-slate-500 max-w-lg font-medium">Dive into hand-picked sections tailored for your academic and personal growth.</p>
            </div>
            <a href="#" class="mt-8 md:mt-0 px-6 py-3 border-2 border-slate-200 rounded-2xl text-slate-700 font-bold hover:bg-slate-900 hover:text-white hover:border-slate-900 transition">
                View Entire Catalog
            </a>
        </div>

        <!-- WIDE LAYOUT GRID -->
        <div class="space-y-12">
            <!-- Wide Card 1 -->
            <div class="group card-hover flex flex-col lg:flex-row bg-white rounded-[3rem] overflow-hidden shadow-xl border border-slate-100 min-h-[450px]">
                <div class="lg:w-1/2 relative overflow-hidden h-[300px] lg:h-auto">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&q=80&w=1200" 
                         class="image-zoom absolute inset-0 w-full h-full object-cover" alt="Scientific">
                    <div class="absolute inset-0 bg-blue-900/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
                    <span class="bg-blue-600 text-white text-[10px] font-black uppercase tracking-[0.2em] px-5 py-2 rounded-lg w-fit mb-6">Science & Tech</span>
                    <h3 class="text-4xl font-bold text-slate-900 mb-6 leading-tight">The Quantum Archive</h3>
                    <p class="text-slate-500 text-lg mb-8 font-light leading-relaxed">
                        Explore the latest research in particle physics, computational theory, and quantum mechanics from the world's leading academic institutes and laboratories.
                    </p>
                    <button class="flex items-center text-blue-600 font-bold text-lg group/btn">
                        Explore Collection 
                        <i class="fas fa-chevron-right ml-3 transform group-hover/btn:translate-x-2 transition-transform"></i>
                    </button>
                </div>
            </div>

            <!-- Wide Card 2 (Reversed Desktop) -->
            <div class="group card-hover flex flex-col lg:flex-row-reverse bg-white rounded-[3rem] overflow-hidden shadow-xl border border-slate-100 min-h-[450px]">
                <div class="lg:w-1/2 relative overflow-hidden h-[300px] lg:h-auto">
                    <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&q=80&w=1200" 
                         class="image-zoom absolute inset-0 w-full h-full object-cover" alt="Literature">
                    <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
                    <span class="bg-indigo-600 text-white text-[10px] font-black uppercase tracking-[0.2em] px-5 py-2 rounded-lg w-fit mb-6">Classic Literature</span>
                    <h3 class="text-4xl font-bold text-slate-900 mb-6 leading-tight">World Philosophies</h3>
                    <p class="text-slate-500 text-lg mb-8 font-light leading-relaxed">
                        A carefully curated collection of timeless wisdom spanning across centuries and continents. From ancient Socratic dialogues to modern existentialist thought.
                    </p>
                    <button class="flex items-center text-indigo-600 font-bold text-lg group/btn">
                        Explore Collection 
                        <i class="fas fa-chevron-right ml-3 transform group-hover/btn:translate-x-2 transition-transform"></i>
                    </button>
                </div>
            </div>

            <!-- Wide Card 3 -->
            <div class="group card-hover flex flex-col lg:flex-row bg-white rounded-[3rem] overflow-hidden shadow-xl border border-slate-100 min-h-[450px]">
                <div class="lg:w-1/2 relative overflow-hidden h-[300px] lg:h-auto">
                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&q=80&w=1200" 
                         class="image-zoom absolute inset-0 w-full h-full object-cover" alt="Archives">
                    <div class="absolute inset-0 bg-amber-900/10 group-hover:bg-transparent transition-colors duration-500"></div>
                </div>
                <div class="lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center">
                    <span class="bg-amber-600 text-white text-[10px] font-black uppercase tracking-[0.2em] px-5 py-2 rounded-lg w-fit mb-6">Rare Archives</span>
                    <h3 class="text-4xl font-bold text-slate-900 mb-6 leading-tight">The Digital Vault</h3>
                    <p class="text-slate-500 text-lg mb-8 font-light leading-relaxed">
                        Access high-resolution digital preservations of historical manuscripts, original blueprints, and architectural sketches previously hidden from the public eye.
                    </p>
                    <button class="flex items-center text-amber-600 font-bold text-lg group/btn">
                        Explore Collection 
                        <i class="fas fa-chevron-right ml-3 transform group-hover/btn:translate-x-2 transition-transform"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
