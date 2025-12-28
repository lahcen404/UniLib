<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

    <!-- DASHBOARD CONTENT -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900">System Overview</h1>
                <p class="text-slate-500 font-medium">Monitoring library performance and daily activities.</p>
            </div>
            <div class="flex space-x-3">
                <button class="px-5 py-2.5 bg-white border border-slate-200 rounded-xl text-slate-700 font-bold hover:bg-slate-50 transition shadow-sm">
                    <i class="fas fa-download mr-2"></i> Export Data
                </button>
                <a href="add_book" class="bg-blue-600 text-white px-6 py-3 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 flex items-center justify-center whitespace-nowrap">
                <i class="fas fa-plus mr-2"></i> Add New Book
            </a>
            </div>
        </div>

        <!-- STATS GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/50 stat-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-blue-50 p-3 rounded-2xl">
                        <i class="fas fa-book text-blue-600 text-xl"></i>
                    </div>
                    <span class="text-green-500 text-xs font-black bg-green-50 px-2 py-1 rounded-lg">+12%</span>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase tracking-widest mb-1">Total Books</p>
                <h3 class="text-3xl font-black text-slate-900">12311</h3>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/50 stat-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-purple-50 p-3 rounded-2xl">
                        <i class="fas fa-hand-holding-heart text-purple-600 text-xl"></i>
                    </div>
                    <span class="text-purple-500 text-xs font-black bg-purple-50 px-2 py-1 rounded-lg">Live</span>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase tracking-widest mb-1">Active Loans</p>
                <h3 class="text-3xl font-black text-slate-900">856</h3>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/50 stat-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-amber-50 p-3 rounded-2xl">
                        <i class="fas fa-clock text-amber-600 text-xl"></i>
                    </div>
                    <span class="text-red-500 text-xs font-black bg-red-50 px-2 py-1 rounded-lg">High</span>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase tracking-widest mb-1">Overdue</p>
                <h3 class="text-3xl font-black text-slate-900">42</h3>
            </div>

            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-xl shadow-slate-200/50 stat-card">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-indigo-50 p-3 rounded-2xl">
                        <i class="fas fa-users text-indigo-600 text-xl"></i>
                    </div>
                    <span class="text-indigo-500 text-xs font-black bg-indigo-50 px-2 py-1 rounded-lg">Total</span>
                </div>
                <p class="text-slate-400 text-sm font-bold uppercase tracking-widest mb-1">Members</p>
                <h3 class="text-3xl font-black text-slate-900">2,104</h3>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Transactions Table -->
            <div class="lg:col-span-2 bg-white rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50 overflow-hidden">
                <div class="p-8 border-b border-slate-50 flex justify-between items-center">
                    <h2 class="text-xl font-extrabold text-slate-900">Recent Transactions</h2>
                    <button class="text-blue-600 text-sm font-bold hover:underline">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50/50">
                                <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Book Details</th>
                                <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Borrower</th>
                                <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Date</th>
                                <th class="px-8 py-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <tr>
                                <td class="px-8 py-5">
                                    <div class="flex items-center">
                                        <div class="w-10 h-14 bg-slate-100 rounded-lg flex-shrink-0 mr-4 overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900">Advanced PHP OOP</p>
                                            <p class="text-[10px] text-slate-400 uppercase font-bold">ISBN: 982-12-32</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-700">Alex Johnston</p>
                                    <p class="text-xs text-slate-400">ID: #4012</p>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-700">Dec 22, 2025</p>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-green-100 text-green-600 text-[10px] font-black uppercase rounded-full tracking-wider">Returned</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-5">
                                    <div class="flex items-center">
                                        <div class="w-10 h-14 bg-slate-100 rounded-lg flex-shrink-0 mr-4 overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900">The Quantum Archive</p>
                                            <p class="text-[10px] text-slate-400 uppercase font-bold">ISBN: 102-44-91</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-700">Sarah Miller</p>
                                    <p class="text-xs text-slate-400">ID: #2988</p>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-700">Dec 20, 2025</p>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 text-[10px] font-black uppercase rounded-full tracking-wider">On Loan</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-8 py-5">
                                    <div class="flex items-center">
                                        <div class="w-10 h-14 bg-slate-100 rounded-lg flex-shrink-0 mr-4 overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900">World Philosophies</p>
                                            <p class="text-[10px] text-slate-400 uppercase font-bold">ISBN: 443-12-00</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-700">Daniel Craig</p>
                                    <p class="text-xs text-slate-400">ID: #1104</p>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="text-sm font-bold text-slate-700">Dec 15, 2025</p>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-red-100 text-red-600 text-[10px] font-black uppercase rounded-full tracking-wider">Overdue</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Management Tools -->
            <div class="space-y-8">
                <div class="bg-slate-900 rounded-[2.5rem] p-8 text-white shadow-2xl shadow-blue-900/20">
                    <h3 class="text-lg font-bold mb-6">Quick Actions</h3>
                    <div class="space-y-4">
                        <button class="w-full flex items-center justify-between p-4 bg-white/10 hover:bg-white/20 rounded-2xl border border-white/10 transition group">
                            <div class="flex items-center">
                                <div class="bg-blue-500/20 p-2 rounded-lg mr-4">
                                    <i class="fas fa-barcode text-blue-400"></i>
                                </div>
                                <span class="font-bold text-sm">Scan ISBN</span>
                            </div>
                            <i class="fas fa-chevron-right text-white/30 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="w-full flex items-center justify-between p-4 bg-white/10 hover:bg-white/20 rounded-2xl border border-white/10 transition group">
                            <div class="flex items-center">
                                <div class="bg-green-500/20 p-2 rounded-lg mr-4">
                                    <i class="fas fa-user-plus text-green-400"></i>
                                </div>
                                <span class="font-bold text-sm">Register Member</span>
                            </div>
                            <i class="fas fa-chevron-right text-white/30 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <button class="w-full flex items-center justify-between p-4 bg-white/10 hover:bg-white/20 rounded-2xl border border-white/10 transition group">
                            <div class="flex items-center">
                                <div class="bg-amber-500/20 p-2 rounded-lg mr-4">
                                    <i class="fas fa-file-invoice text-amber-400"></i>
                                </div>
                                <span class="font-bold text-sm">Monthly Report</span>
                            </div>
                            <i class="fas fa-chevron-right text-white/30 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-xl shadow-slate-200/50">
                    <h3 class="text-lg font-bold text-slate-900 mb-6">Popular Books</h3>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-16 bg-slate-100 rounded-xl mr-4 flex-shrink-0 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <p class="text-sm font-bold text-slate-800">Advanced PHP</p>
                                <div class="w-full bg-slate-100 h-1.5 rounded-full mt-2">
                                    <div class="bg-blue-600 h-1.5 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <span class="ml-4 text-xs font-black text-slate-400">85%</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-16 bg-slate-100 rounded-xl mr-4 flex-shrink-0 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <p class="text-sm font-bold text-slate-800">Quantum Theory</p>
                                <div class="w-full bg-slate-100 h-1.5 rounded-full mt-2">
                                    <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 62%"></div>
                                </div>
                            </div>
                            <span class="ml-4 text-xs font-black text-slate-400">62%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
