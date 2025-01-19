<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Search and Filters Section -->
    <section class="mb-6">
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex flex-col md:flex-row gap-4 justify-between">
                <!-- Search Bar -->
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" placeholder="Search teachers..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
                <!-- Filters -->
                <div class="flex flex-wrap gap-3">
                    <select class="border rounded-lg px-4 py-2 bg-white">
                        <option value="">Status</option>
                        <option value="active">Active</option>
                        <option value="onLeave">On Leave</option>
                        <option value="terminated">Terminated</option>
                    </select>
                    <button class="bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600">
                        <i class="fas fa-filter mr-2"></i>Apply Filters
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Table -->
    <section class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Teacher
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Courses
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Students
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Profits
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Commission (20%)
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach ($teachers as $teacher): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900"><?= $teacher->getFullName() ?></div>
                                    <div class="text-sm text-gray-500"><?= $teacher->getEmail() ?></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?= $teacher->getTotalCourses() ?> courses</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"><?= $teacher->getStudentsCount() ?> students</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">$<?= $teacher->getTotalProfits() ?></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-green-600">$<?= $teacher->getTotalProfits() * 0.2?></div>
                        </td>
                    </tr>
                    <?php endforeach;?>
            </table>
        </div>
    </section>
    
</div>