<main class="flex-grow max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 flex items-center">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">
        
        <div class="relative group">
            <div class="absolute -inset-4 <?= $book['availability'] === 'AVAILABLE' ? 'bg-blue-100' : 'bg-amber-100' ?> rounded-[3rem] blur-3xl opacity-30"></div>
            
            <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white bg-white">
                <img src="https://imgs.search.brave.com/BaCwUxTGMVyyZXb86FY-s2C06ZMxW6dz-FQmDH8sk9c/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZXBhZ2luZS5m/ci9pcy81NDQ5Lzk3/ODk5Mzg5NDEyNThf/MV83NS5qcGc" 
                     alt="Book Cover" class="w-full h-auto object-cover">
                
                <div class="absolute top-6 right-6">
                    <?php if ($book['availability'] === 'AVAILABLE'): ?>
                        <span class="px-6 py-3 bg-green-500 text-white text-xs font-black uppercase tracking-[0.2em] rounded-full shadow-2xl shadow-green-500/40 flex items-center">
                            <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                            Available
                        </span>
                    <?php else: ?>
                        <span class="px-6 py-3 bg-amber-500 text-white text-xs font-black uppercase tracking-[0.2em] rounded-full shadow-2xl shadow-amber-500/40 flex items-center">
                            <span class="w-2 h-2 bg-white rounded-full mr-2"></span>
                            Borrowed
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="space-y-12">
            <section>
                <h1 class="text-6xl font-black text-slate-900 mb-2 leading-[1.1] tracking-tighter">
                    <?= htmlspecialchars($book['title']) ?>
                </h1>
                
                <p class="text-2xl text-slate-500 font-medium mb-10">
                    by <span class="text-slate-800 font-bold underline decoration-blue-200 underline-offset-4"><?= htmlspecialchars($book['author']) ?></span>
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-1 xl:grid-cols-3 gap-4">
                    
                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm details-card hover:border-blue-200 transition">
                        <p class="text-[10px] font-black text-slate-400 uppercase mb-2 tracking-[0.2em]">Publication</p>
                        <p class="font-extrabold text-slate-900 text-xl tracking-tight"><?= $book['yearPublication'] ?></p>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm details-card hover:border-blue-200 transition">
                        <p class="text-[10px] font-black text-slate-400 uppercase mb-2 tracking-[0.2em]">Category</p>
                        <p class="font-extrabold text-slate-900 text-xl tracking-tight capitalize"><?= htmlspecialchars($book['genre']) ?></p>
                    </div>

                    <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm details-card hover:border-blue-200 transition">
                        <p class="text-[10px] font-black text-slate-400 uppercase mb-2 tracking-[0.2em]">Status</p>
                        <?php if ($book['availability'] === 'AVAILABLE'): ?>
                            <p class="font-extrabold text-green-600 text-xl tracking-tight">Available</p>
                        <?php else: ?>
                            <p class="font-extrabold text-amber-600 text-xl tracking-tight">On Loan</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="pt-4 flex flex-col sm:flex-row gap-4">
                
                <a href="edit_book?id=<?= $book['id'] ?>" class="flex-1 py-5 bg-slate-900 text-white text-lg font-bold rounded-3xl hover:bg-slate-800 transition shadow-xl shadow-slate-200 flex items-center justify-center group">
                    <i class="fas fa-edit mr-3 text-slate-400 group-hover:text-white transition-colors"></i> Edit Book
                </a>

                <a href="deleteBook?id=<?= $book['id'] ?>" 
                   onclick="return confirm('Are you sure you want to delete this book?');"
                   class="flex-1 py-5 bg-white border-2 border-red-50 text-red-500 text-lg font-bold rounded-3xl hover:bg-red-50 hover:border-red-100 transition flex items-center justify-center">
                    <i class="fas fa-trash-alt mr-3"></i> Delete
                </a>

            </section>
            
            <div class="text-center sm:text-left">
                <a href="list-books-admin" class="inline-flex items-center text-slate-400 font-bold text-sm hover:text-blue-600 transition mt-4">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Catalog
                </a>
            </div>

        </div>
    </div>
</main>