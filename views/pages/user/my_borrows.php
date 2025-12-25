<header class="mb-8">
    <h1 class="text-3xl font-bold text-gray-900">My Borrowed Books</h1>
    <p class="text-gray-600">Track your current reading and your library history.</p>
</header>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
    <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-100">
        <span class="block text-sm text-indigo-600 font-semibold uppercase">Currently Reading</span>
        <span class="text-2xl font-bold text-indigo-900">2 Books</span>
    </div>
</div>

<div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Book Title</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Borrow Date</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
            
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-8 bg-gray-100 rounded flex items-center justify-center text-gray-400">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">Clean Code</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Oct 12, 2023
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Oct 26, 2023
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        Active
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <button class="text-indigo-600 hover:text-indigo-900 font-bold">Return Book</button>
                </td>
            </tr>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">The Pragmatic Programmer</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sept 01, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sept 15, 2023</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                        Returned
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-gray-400 italic">
                    Closed
                </td>
            </tr>

        </tbody>
    </table>
</div>