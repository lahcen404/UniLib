<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<main class="flex-grow flex items-center justify-center py-16 px-4">
    <div class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
        
        <div class="lg:col-span-2 space-y-8">
            <div>
                <a href="dashboard" class="text-blue-600 font-bold text-sm flex items-center mb-6 group">
                    <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Back to Dashboard
                </a>
                <h1 class="text-4xl font-extrabold text-slate-900 mb-4">Add a New Resource</h1>
                <p class="text-slate-500 leading-relaxed font-medium">
                    Expand the UniLib catalog. Please ensure all metadata is accurate.
                </p>
            </div>
        </div>

        <div class="lg:col-span-3 bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200 border border-slate-100 p-10 lg:p-12">
            
            <?php if (isset($_SESSION['success'])): ?>
                <div class="p-4 mb-6 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    <span class="font-bold">Success!</span> <?= $_SESSION['success']; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['errors']['db'])): ?>
                <div class="p-4 mb-6 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                    <span class="font-bold">Error!</span> <?= $_SESSION['errors']['db']; ?>
                </div>
            <?php endif; ?>

            <form action="storeBook" method="POST" class="space-y-6">
                
                <div class="space-y-2">
                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Book Title</label>
                    <input type="text" name="title" placeholder="e.g. Advanced Quantum Mechanics" 
                           class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input">
                    
                    <?php if (isset($_SESSION['errors']['title'])): ?>
                        <div class="text-red-500 text-sm mt-1 ml-1">
                            <i class="fas fa-exclamation-circle"></i> <?= $_SESSION['errors']['title'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Author Name</label>
                    <input type="text" name="author" placeholder="e.g. Stephen Hawking" 
                           class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input">
                    
                    <?php if (isset($_SESSION['errors']['author'])): ?>
                        <div class="text-red-500 text-sm mt-1 ml-1">
                            <i class="fas fa-exclamation-circle"></i> <?= $_SESSION['errors']['author'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Release Year</label>
                        <input type="number" name="yearPublication" placeholder="YYYY" 
                               class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input">
                        
                        <?php if (isset($_SESSION['errors']['yearPub'])): ?>
                            <div class="text-red-500 text-sm mt-1 ml-1">
                                <i class="fas fa-exclamation-circle"></i> <?= $_SESSION['errors']['yearPub'] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-black text-slate-400 uppercase tracking-widest ml-1">Genre</label>
                        <select name="genre" class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-semibold form-input appearance-none">
                            <option value="" disabled selected>Select a Genre</option>
                            <option value="science">Science & Technology</option>
                            <option value="literature">Classic Literature</option>
                            <option value="history">History & Archives</option>
                            <option value="philosophy">Philosophy</option>
                            <option value="other">Other</option>
                        </select>

                        <?php if (isset($_SESSION['errors']['genre'])): ?>
                            <div class="text-red-500 text-sm mt-1 ml-1">
                                <i class="fas fa-exclamation-circle"></i> <?= $_SESSION['errors']['genre'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="pt-6">
                    <button type="submit" class="w-full py-5 bg-blue-600 text-white text-lg font-bold rounded-2xl hover:bg-blue-700 transition shadow-2xl shadow-blue-500/30 transform active:scale-[0.98]">
                        <i class="fas fa-save mr-2"></i> Register Book to Catalog
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php 
    unset($_SESSION['errors']); 
    unset($_SESSION['success']); 
?>