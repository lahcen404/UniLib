
    <!-- MAIN CONTENT -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header & Top Actions -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
            <div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tight">Library Catalog</h1>
                <p class="text-slate-500 font-medium">Add, update, or remove books from the system.</p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <div class="relative flex-grow">
                    <input type="text" placeholder="Search by title or genre..." 
                           class="w-full pl-12 pr-6 py-3 bg-white border border-slate-200 rounded-2xl text-sm font-semibold focus:outline-none focus:ring-4 focus:ring-blue-500/10 transition">
                    <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-slate-300"></i>
                </div>
                <a href="add_book.html" class="bg-blue-600 text-white px-6 py-3 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center justify-center whitespace-nowrap">
                    <i class="fas fa-plus mr-2"></i> Add New Book
                </a>
            </div>
        </div>

        <!-- BOOKS TABLE -->
        <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50">
                            <th class="px-8 py-5 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">ID</th>
                            <th class="px-8 py-5 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Book Details</th>
                            <th class="px-8 py-5 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Year</th>
                            <th class="px-8 py-5 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Genre</th>
                            <th class="px-8 py-5 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Availability</th>
                            <th class="px-8 py-5 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <!-- Row 1 -->
                        <tr class="table-row-hover">
                            <td class="px-8 py-6 text-sm font-bold text-slate-400">#101</td>
                            <td class="px-8 py-6 text-sm font-bold text-slate-600">2023</td>
                            <td class="px-8 py-6">
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 text-[10px] font-black uppercase rounded-lg border border-blue-100">Science</span>
                            </td>
                            <td class="px-8 py-6">
                                <span class="flex items-center text-xs font-black text-green-600 uppercase tracking-wider">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Available
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end space-x-2">
                                    <a href="edit_book.html" class="w-10 h-10 bg-slate-100 text-slate-600 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>
                                    <button class="w-10 h-10 bg-slate-100 text-red-500 rounded-xl flex items-center justify-center hover:bg-red-500 hover:text-white transition">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="table-row-hover">
                            <td class="px-8 py-6 text-sm font-bold text-slate-400">#102</td>
                            <td class="px-8 py-6">
                                <div class="flex items-center">
                                    <div class="w-10 h-14 bg-slate-100 rounded-lg flex-shrink-0 mr-4 overflow-hidden border border-slate-200">
                                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                    </div>
                                    <span class="text-sm font-bold text-slate-900">The Silent Echo</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-sm font-bold text-slate-600">2021</td>
                            <td class="px-8 py-6">
                                <span class="px-3 py-1 bg-purple-50 text-purple-600 text-[10px] font-black uppercase rounded-lg border border-purple-100">Literature</span>
                            </td>
                            <td class="px-8 py-6">
                                <span class="flex items-center text-xs font-black text-amber-500 uppercase tracking-wider">
                                    <span class="w-2 h-2 bg-amber-500 rounded-full mr-2"></span> Borrowed
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end space-x-2">
                                    <a href="edit_book.html" class="w-10 h-10 bg-slate-100 text-slate-600 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>
                                    <button class="w-10 h-10 bg-slate-100 text-red-500 rounded-xl flex items-center justify-center hover:bg-red-500 hover:text-white transition">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="table-row-hover">
                            <td class="px-8 py-6 text-sm font-bold text-slate-400">#103</td>
                            <td class="px-8 py-6">
                                <div class="flex items-center">
                                    <div class="w-10 h-14 bg-slate-100 rounded-lg flex-shrink-0 mr-4 overflow-hidden border border-slate-200">
                                        <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                    </div>
                                    <span class="text-sm font-bold text-slate-900">World Philosophies</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-sm font-bold text-slate-600">2019</td>
                            <td class="px-8 py-6">
                                <span class="px-3 py-1 bg-amber-50 text-amber-600 text-[10px] font-black uppercase rounded-lg border border-amber-100">Philosophy</span>
                            </td>
                            <td class="px-8 py-6">
                                <span class="flex items-center text-xs font-black text-green-600 uppercase tracking-wider">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> Available
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end space-x-2">
                                    <a href="edit_book.html" class="w-10 h-10 bg-slate-100 text-slate-600 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                        <i class="fas fa-edit text-xs"></i>
                                    </a>
                                    <button class="w-10 h-10 bg-slate-100 text-red-500 rounded-xl flex items-center justify-center hover:bg-red-500 hover:text-white transition">
                                        <i class="fas fa-trash-alt text-xs"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Placeholder -->
            <div class="px-8 py-6 bg-slate-50/30 border-t border-slate-50 flex items-center justify-between">
                <p class="text-xs font-bold text-slate-400">Showing 3 of 128 books</p>
                <div class="flex space-x-2">
                    <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-white transition cursor-not-allowed">
                        <i class="fas fa-chevron-left text-[10px]"></i>
                    </button>
                    <button class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white font-bold text-xs">1</button>
                    <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-white transition font-bold text-xs">2</button>
                    <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-white transition">
                        <i class="fas fa-chevron-right text-[10px]"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
