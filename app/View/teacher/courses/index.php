<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900">Your Courses</h1>
        <p class="mt-4 text-xl text-gray-600">Manage and view your courses here</p>
    </div>

    <!-- Filter Section -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-6 items-center">
            <!-- Search Input -->
            <div class="relative">
                <input type="text" placeholder="Search courses..." class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                <span class="absolute left-3 top-3.5 text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
            </div>

            <!-- Sort by Students Dropdown -->
            <div class="relative">
                <select class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg appearance-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    <option>Sort by Students Enrollment</option>
                    <option>Most Enrolled</option>
                    <option>Least Enrolled</option>
                </select>
                <span class="absolute left-3 top-3.5 text-gray-400">
                    <i class="fas fa-users"></i>
                </span>
            </div>

            <!-- Filter Button -->
            <div class="col-span-1 md:col-span-4 flex justify-center">
                <button class="px-10 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-filter mr-2"></i> Filter
                </button>
            </div>
        </div>
    </div>

    <!-- Course Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Course Card 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="relative">
                <img src="https://placehold.co/400x225" alt="Course" class="w-full h-48 object-cover">
            </div>
            <div class="p-6">
                <div class="flex items-center mb-2">
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Programming</span>
                    <span class="ml-2 text-gray-500 text-sm">Advanced</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Python Programming</h3>
                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                    <span class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        12 hours
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-user-graduate mr-2"></i>
                        1,234 students
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">(4.8)</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Course Card 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="relative">
                <img src="https://placehold.co/400x225" alt="Course" class="w-full h-48 object-cover">
            </div>
            <div class="p-6">
                <div class="flex items-center mb-2">
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">Programming</span>
                    <span class="ml-2 text-gray-500 text-sm">Advanced</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Python Programming</h3>
                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                    <span class="flex items-center">
                        <i class="fas fa-clock mr-2"></i>
                        12 hours
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-user-graduate mr-2"></i>
                        1,234 students
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">(4.8)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Course Button -->
    <div class="text-center mt-12">
        <button class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-colors">
            Add New Course
        </button>
    </div>
</div>