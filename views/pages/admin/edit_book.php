<div class="flex-grow flex items-center justify-center py-16 px-4">
    <div class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
        
        <div class="lg:col-span-2 space-y-8">
            <div>
                <a href="list-books-admin" class="text-blue-600 font-bold text-sm flex items-center mb-6 group">
                    <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Back to Catalog
                </a>
                <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Edit Resource</h1>
                <p class="text-slate-500 font-medium">Update the book details below.</p>
            </div>
        </div>

        <div class="lg:col-span-3 bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200 border border-slate-100 p-10 lg:p-12">
            
            <?php if (isset($_SESSION['errors']['global'])): ?>
                <div class="p-4 mb-6 text-sm text-red-700 bg-red-100 rounded-lg">
                    <?= $_SESSION['errors']['global']; ?>
                </div>
            <?php endif; ?>

            <form action="update_book" method="POST" class="space-y-6">
                
                <input type="hidden" name="id" value="<?= $book['id']; ?>">

                <div class="space-y-2">
                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Book Title</label>
                    <input type="text" name="title" value="<?= htmlspecialchars($book['title']); ?>" 
                           class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Author</label>
                    <input type="text" name="author" value="<?= htmlspecialchars($book['author']); ?>" 
                           class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Release Year</label>
                        <input type="number" name="yearPublication" value="<?= htmlspecialchars($book['yearPublication']); ?>" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input">
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Genre</label>
                        <select name="genre" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input appearance-none">
                            <option value="science" <?= $book['genre'] == 'science' ? 'selected' : '' ?>>Science & Technology</option>
                            <option value="literature" <?= $book['genre'] == 'literature' ? 'selected' : '' ?>>Classic Literature</option>
                            <option value="history" <?= $book['genre'] == 'history' ? 'selected' : '' ?>>History & Archives</option>
                            <option value="philosophy" <?= $book['genre'] == 'philosophy' ? 'selected' : '' ?>>Philosophy</option>
                            <option value="other" <?= $book['genre'] == 'other' ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Current Status</label>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="relative flex items-center justify-center p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 cursor-pointer hover:bg-white hover:border-blue-600 transition group">
                            <input type="radio" name="availability" value="AVAILABLE" class="sr-only peer" <?= $book['availability'] == 'AVAILABLE' ? 'checked' : '' ?>>
                            <div class="flex items-center space-x-3 text-slate-400 peer-checked:text-blue-600 transition">
                                <i class="fas fa-check-circle text-lg"></i>
                                <span class="font-bold">Available</span>
                            </div>
                            <div class="absolute inset-0 rounded-2xl border-2 border-transparent peer-checked:border-blue-600 pointer-events-none"></div>
                        </label>

                        <label class="relative flex items-center justify-center p-4 rounded-2xl border-2 border-slate-100 bg-slate-50 cursor-pointer hover:bg-white hover:border-amber-600 transition group">
                            <input type="radio" name="availability" value="BORROWED" class="sr-only peer" <?= $book['availability'] == 'BORROWED' ? 'checked' : '' ?>>
                            <div class="flex items-center space-x-3 text-slate-400 peer-checked:text-amber-600 transition">
                                <i class="fas fa-clock text-lg"></i>
                                <span class="font-bold">Borrowed</span>
                            </div>
                            <div class="absolute inset-0 rounded-2xl border-2 border-transparent peer-checked:border-amber-600 pointer-events-none"></div>
                        </label>
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full py-5 bg-blue-600 text-white text-lg font-bold rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-500/30">
                        <i class="fas fa-sync-alt mr-2"></i> Update Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php unset($_SESSION['errors']); ?>