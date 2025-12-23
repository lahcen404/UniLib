
    <!-- MAIN CONTENT -->
    <main class="flex-grow flex items-center justify-center py-16 px-4">
        <div class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
            
            <!-- Left Side: Instructions/Info -->
            <div class="lg:col-span-2 space-y-8">
                <div>
                    <a href="admin_dashboard.html" class="text-blue-600 font-bold text-sm flex items-center mb-6 group">
                        <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Back to Dashboard
                    </a>
                    
                    <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Edit Resource</h1>
                  
                </div>

                
            </div>

            <!-- Right Side: Form Card -->
            <div class="lg:col-span-3 bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200 border border-slate-100 p-10 lg:p-12">
                <form action="#" class="space-y-6">
                    
                    <!-- Title Field -->
                    <div class="space-y-2">
                        <label for="title" class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Book Title</label>
                        <input type="text" id="title" name="title" value="Advanced Quantum Mechanics" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Publication Year -->
                        <div class="space-y-2">
                            <label for="year" class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Release Year</label>
                            <input type="number" id="year" name="year" value="2023" 
                                   class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input" required>
                        </div>

                        <!-- Genre -->
                        <div class="space-y-2">
                            <label for="genre" class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Genre / Category</label>
                            <select id="genre" name="genre" 
                                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input appearance-none">
                                <option value="science" selected>Science & Technology</option>
                                <option value="literature">Classic Literature</option>
                                <option value="history">History & Archives</option>
                                <option value="philosophy">Philosophy</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Availability Status -->
                    <div class="space-y-2">
                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Current Status</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="relative flex items-center justify-center p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 cursor-pointer hover:bg-white hover:border-blue-600 transition group">
                                <input type="radio" name="availability" value="AVAILABLE" class="sr-only peer" checked>
                                <div class="flex items-center space-x-3 text-slate-400 peer-checked:text-blue-600 transition">
                                    <i class="fas fa-check-circle text-lg"></i>
                                    <span class="font-bold">Available</span>
                                </div>
                                <div class="absolute inset-0 rounded-2xl border-2 border-transparent peer-checked:border-blue-600 pointer-events-none"></div>
                            </label>

                            <label class="relative flex items-center justify-center p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 cursor-pointer hover:bg-white hover:border-amber-600 transition group">
                                <input type="radio" name="availability" value="BORROWED" class="sr-only peer">
                                <div class="flex items-center space-x-3 text-slate-400 peer-checked:text-amber-600 transition">
                                    <i class="fas fa-clock text-lg"></i>
                                    <span class="font-bold">Borrowed</span>
                                </div>
                                <div class="absolute inset-0 rounded-2xl border-2 border-transparent peer-checked:border-amber-600 pointer-events-none"></div>
                            </label>
                        </div>
                    </div>

                    <!-- Book Cover -->
                    <div class="space-y-2">
                        <label for="cover" class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Cover Image URL</label>
                        <div class="relative">
                            <input type="url" id="cover" name="cover" value="https://images.unsplash.com/photo-1544947950-fa07a98d237f" 
                                   class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input pr-12">
                            <i class="fas fa-image absolute right-6 top-1/2 -translate-y-1/2 text-slate-300"></i>
                        </div>
                    </div>

                    <!-- Submit & Delete Actions -->
                    <div class="pt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <button type="submit" class="w-full py-5 bg-blue-600 text-white text-lg font-bold rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-500/30 transform active:scale-[0.98]">
                            <i class="fas fa-sync-alt mr-2"></i> Update Changes
                        </button>
                        <button type="button" class="w-full py-5 bg-white border border-red-100 text-red-500 text-lg font-bold rounded-2xl hover:bg-red-50 hover:border-red-200 transition transform active:scale-[0.98]">
                            <i class="fas fa-trash-alt mr-2"></i> Delete Book
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
