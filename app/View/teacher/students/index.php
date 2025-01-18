<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Student Table Section -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-6">        

        
        <!-- Table -->
        <table class="w-full text-left table-auto">
            <thead>
                <tr class="border-b border-gray-200 text-gray-600">
                    <th class="py-3 px-4">Name</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Enrolled Courses</th>
                    <th class="py-3 px-4">Total Spent</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr class="border-b border-gray-100 hover:bg-gray-50">
                    <td class="py-4 px-4 text-gray-800"><?= $student->getFullName() ?></td>
                    <td class="py-4 px-4 text-gray-500"><?= $student->getEmail() ?></td>
                    <td class="py-4 px-4 text-gray-800"><?= $student->getTotalCourses() ?></td>
                    <td class="py-4 px-4 text-gray-800">$<?= $student->getTotalSpents() ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>