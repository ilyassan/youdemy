<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900">Your Courses</h1>
        <p class="mt-4 text-xl text-gray-600">Manage and view your courses here</p>
    </div>


    <!-- Course Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <?php foreach ($courses as $course):?>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="relative">
                <img src="https://placehold.co/400x225" alt="Course" class="w-full h-48 object-cover">
            </div>
            <div class="p-6">
                <div class="flex items-center mb-2">
                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded"><?= $course->getCategoryName() ?></span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2"><?= $course->getTitle() ?></h3>
                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                    <span class="flex items-center">
                        <i class="fas fa-user-graduate mr-2"></i>
                        <?= $course->getEnrollmentsCount() ?> students
                    </span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex text-yellow-400">
                        <?php
                            $fullStars = floor($course->getRate());
                            $halfStar = ($course->getRate() - $fullStars) >= 0.5 ? 1 : 0;
                            $emptyStars = 5 - $fullStars - $halfStar;

                            for ($i = 0; $i < $fullStars; $i++) {
                                echo '<i class="fas fa-star"></i>';
                            }
                            if ($halfStar) {
                                echo '<i class="fas fa-star-half-alt"></i>';
                            }
                            for ($i = 0; $i < $emptyStars; $i++) {
                                echo '<i class="far fa-star"></i>';
                            }
                        ?>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">(<?= $course->getRate() ?>)</span>
                    </div>
                </div>
                <div class="flex justify-center mt-4 text-indigo-700">
                    <a href="<?= URLROOT . 'courses/' . $course->getId() ?>" class="hover:underline underline-offset-4">View Details</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>

    <!-- Add New Course Button -->
    <div class="text-center mt-12">
        <button class="px-8 py-3 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition-colors">
            Add New Course
        </button>
    </div>
</div>



<script>
        function toggleDropdown(dropdownId, menuId) {
        closeAllDropdowns();
        
        const menu = document.getElementById(menuId);
        menu.classList.toggle('hidden');
    }

    function selectOption(dropdownId, labelId, value, id = '') {
        document.getElementById("category_id").value = id;
        document.getElementById(labelId).innerText = value;
        document.getElementById(`${dropdownId}Menu`).classList.add('hidden');
    }

    function closeAllDropdowns() {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    }

    // Event listeners for dropdown toggles
    document.getElementById('categoriesDropdown').addEventListener('click', function (event) {
        event.stopPropagation();
        toggleDropdown('categoriesDropdown', 'categoriesDropdownMenu');
    });

    document.addEventListener('click', function () {
        closeAllDropdowns();
    });
</script>