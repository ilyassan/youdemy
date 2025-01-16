<!-- Main Container -->
<section class="bg-gray-50 py-12">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900">Explore Our Courses</h1>
            <p class="mt-4 text-xl text-gray-600">Discover the perfect course to advance your skills and career</p>
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

                <!-- Topic Dropdown -->
                <div class="relative">
                    <select class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg appearance-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option>All Topics</option>
                        <option>Programming</option>
                        <option>Data Science</option>
                        <option>Design</option>
                        <option>Business</option>
                    </select>
                    <span class="absolute left-3 top-3.5 text-gray-400">
                        <i class="fas fa-book"></i>
                    </span>
                </div>

                <!-- Level Dropdown -->
                <div class="relative">
                    <select class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg appearance-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option>All Levels</option>
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                    <span class="absolute left-3 top-3.5 text-gray-400">
                        <i class="fas fa-layer-group"></i>
                    </span>
                </div>

                <!-- Duration Dropdown -->
                <div class="relative">
                    <select class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg appearance-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option>Any Duration</option>
                        <option>0-2 Hours</option>
                        <option>2-5 Hours</option>
                        <option>5-10 Hours</option>
                        <option>10+ Hours</option>
                    </select>
                    <span class="absolute left-3 top-3.5 text-gray-400">
                        <i class="fas fa-clock"></i>
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
            
            <?php foreach ($courses as $course): ?>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="relative">
                    <img src="https://placehold.co/400x225" alt="Course" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded"><?= $course->getCategoryName() ?></span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2"><?= $course->getTitle() ?></h3>
                    <p class="text-gray-600 text-sm mb-4"><?= $course->getDescription() ?></p>
                    <div class="flex items-center mb-4">
                        <img src="https://placehold.co/32x32" alt="Instructor" class="w-8 h-8 rounded-full">
                        <span class="ml-2 text-sm text-gray-600"><?= $course->getTeacherName() ?></span>
                    </div>
                    <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                        <span class="flex items-center">
                            <i class="fas fa-clock mr-2"></i>
                            12 hours
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-user-graduate mr-2"></i>
                            <?= $course->getEnrollmentsCount() ?> students
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
                            <span class="ml-2 text-sm text-gray-600">(<?= $course->getRate() ?>)</span>
                        </div>
                        <span class="text-2xl font-bold text-indigo-600">$<?= number_format($course->getPrice(), 2) ?></span>
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition-colors">
                        Enroll Now
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="px-8 py-3 bg-white text-indigo-600 rounded-lg font-medium border border-indigo-200 hover:bg-indigo-50 transition-all">
                Load More Courses
            </button>
        </div>
    </div>
</section>