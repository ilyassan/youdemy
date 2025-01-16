<!-- My Courses Hero Section -->
<div class="bg-gradient-to-r from-indigo-600 to-blue-500 pt-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">My Courses</h1>
        <div class="flex flex-wrap gap-4 text-white mb-6">
            <div class="flex items-center">
                <i class="fas fa-book-open mr-2"></i>
                <span>Your Learning Collection</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                <span>Access anytime, anywhere</span>
            </div>
        </div>
    </div>
</div>

<!-- Course Filters -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <form class="flex flex-wrap items-center justify-between gap-4 mb-8">
        <div class="relative">
            <input 
                type="text" 
                autocomplete="off"
                value="<?= $_GET['keyword'] ?? '' ?>"
                name="keyword"
                placeholder="Search your courses..." 
                class="pl-10 outline-none focus:ring-2 focus:ring-indigo-500 pr-4 py-2 border rounded-lg w-full md:w-80"
            >
            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
        </div>
        
        <!-- Filter Button -->
        <div class="col-span-1 md:col-span-4 flex justify-center">
            <button class="px-10 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition-colors">
                <i class="fas fa-filter mr-2"></i> Filter
            </button>
        </div>
    </form>

    <!-- Course Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php if (! empty($courses)):?>
        <?php foreach ($courses as $course):?>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://placehold.co/400x225" alt="Course Thumbnail" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600"><?= $course->getTitle() ?></h3>
                    <div class="flex flex-wrap gap-4 text-sm mb-4">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Enrolled: <?= (new DateTime($course->getCreatedAt()))->format('F d, Y') ?></span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-user mr-2"></i>
                            <span><?= $course->getTeacherName() ?></span>
                        </div>
                    </div>
                    <div class="flex items-center mb-4">
                        <button class="text-yellow-400 hover:text-yellow-500">
                            <i class="fas fa-star"></i>
                        </button>
                        <button class="text-yellow-400 hover:text-yellow-500">
                            <i class="fas fa-star"></i>
                        </button>
                        <button class="text-yellow-400 hover:text-yellow-500">
                            <i class="fas fa-star"></i>
                        </button>
                        <button class="text-yellow-400 hover:text-yellow-500">
                            <i class="fas fa-star"></i>
                        </button>
                        <button class="text-yellow-400 hover:text-yellow-500">
                            <i class="fas fa-star"></i>
                        </button>
                        <span class="ml-2 text-sm text-gray-600">Your rating: <?= number_format($course->getRate(), 2) ?></span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                        Watch Course
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else:?>
            <!-- Empty State (shown when no courses) -->
            <div class="bg-gray-50 rounded-xl p-8 text-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-book-open text-2xl text-indigo-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">No courses yet</h3>
                <p class="text-gray-600 mb-6">Start your learning journey by enrolling in a course</p>
                <button class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                    Browse Courses
                </button>
            </div>
        <?php endif;?>
        
        <!-- Course Card Unrated -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all">
            <div class="relative">
                <img src="https://placehold.co/400x225" alt="Course Thumbnail" class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-medium text-indigo-600">
                    Completed
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600">Web Development Basics</h3>
                <div class="flex flex-wrap gap-4 text-sm mb-4">
                    <div class="flex items-center text-gray-600">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Enrolled: Jan 5, 2025</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <i class="fas fa-user mr-2"></i>
                        <span>Mike Peters</span>
                    </div>
                </div>
                <div class="flex items-center mb-4">
                    <button class="text-gray-300 hover:text-yellow-500">
                        <i class="fas fa-star"></i>
                    </button>
                    <button class="text-gray-300 hover:text-yellow-500">
                        <i class="fas fa-star"></i>
                    </button>
                    <button class="text-gray-300 hover:text-yellow-500">
                        <i class="fas fa-star"></i>
                    </button>
                    <button class="text-gray-300 hover:text-yellow-500">
                        <i class="fas fa-star"></i>
                    </button>
                    <button class="text-gray-300 hover:text-yellow-500">
                        <i class="fas fa-star"></i>
                    </button>
                    <span class="ml-2 text-sm text-gray-600">Rate this course</span>
                </div>
                <button class="w-full bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                    Watch Course
                </button>
            </div>
        </div>
    </div>

</div>