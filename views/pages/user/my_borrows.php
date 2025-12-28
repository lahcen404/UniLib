

<main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <header class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">My Borrowed Books</h1>
        <p class="text-gray-600">Track your current reading and your library history.</p>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-100">
            <span class="block text-sm text-indigo-600 font-semibold uppercase">Currently Reading</span>
            <span class="text-2xl font-bold text-indigo-900">
                <?= count($borrows) ?> Books
            </span>
        </div>
    </div>

    <?php if (isset($_SESSION['success'])): ?>
        <div class="mb-6 bg-green-100 border border-green-200 text-green-800 px-4 py-3 rounded-xl font-bold flex items-center">
            <i class="fas fa-check-circle mr-3"></i>
            <?= $_SESSION['success']; ?>
        </div>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['errors']['global'])): ?>
        <div class="mb-6 bg-red-100 border border-red-200 text-red-800 px-4 py-3 rounded-xl font-bold flex items-center">
            <i class="fas fa-exclamation-circle mr-3"></i>
            <?= $_SESSION['errors']['global']; ?>
        </div>
        <?php unset($_SESSION['errors']); ?>
    <?php endif; ?>

    <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
        
        <?php if (empty($borrows)): ?>
            <div class="p-12 text-center text-gray-400">
                <i class="fas fa-book-open text-4xl mb-4 opacity-50"></i>
                <p class="font-bold text-lg">You haven't borrowed any books yet.</p>
                <a href="list-books-admin" class="text-indigo-600 hover:underline mt-2 inline-block font-semibold">Browse Catalog</a>
            </div>
        <?php else: ?>
            
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book Title</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Borrow Date</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th> <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    
                    <?php foreach ($borrows as $borrow): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-8 bg-gray-100 rounded flex items-center justify-center text-gray-400 font-bold">
                                    <?= substr($borrow['title'], 0, 1) ?>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($borrow['title']) ?></div>
                                    <div class="text-xs text-gray-500">by <?= htmlspecialchars($borrow['author']) ?></div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <?= date('M d, Y', strtotime($borrow['loan_date'])) ?>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <?= date('M d, Y', strtotime($borrow['loan_date'] . ' + 14 days')) ?>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Active Loan
                            </span>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form action="return_book" method="POST">
                                <input type="hidden" name="book_id" value="<?= $borrow['book_id'] ?>">
                                <button type="submit" 
                                        onclick="return confirm('Confirm returning this book?')"
                                        class="text-indigo-600 hover:text-indigo-900 font-bold hover:underline transition">
                                    Return Book
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        <?php endif; ?>
    </div>
</main>