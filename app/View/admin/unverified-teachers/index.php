<!-- Search and Filters Section -->
<section class="mb-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex flex-col md:flex-row gap-4 justify-between">
            <!-- Search Bar -->
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Search pending verifications..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <!-- Filters -->
            <div class="flex flex-wrap gap-3">
                <select class="border rounded-lg px-4 py-2 bg-white">
                    <option value="">Verification Status</option>
                    <option value="pending">Pending Review</option>
                    <option value="documents">Awaiting Documents</option>
                    <option value="rejected">Rejected</option>
                </select>
                <select class="border rounded-lg px-4 py-2 bg-white">
                    <option value="">Registration Date</option>
                    <option value="today">Today</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>
                <button class="bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600">
                    <i class="fas fa-filter mr-2"></i>Apply Filters
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Verification Table -->
<section class="bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Teacher
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Applied For
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Registration Date
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
                <!-- Teacher Row 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40" alt="Teacher">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Dr. Mark Thompson</div>
                                <div class="text-sm text-gray-500">m.thompson@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Mathematics</div>
                        <div class="text-sm text-gray-500">Senior Level</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jan 14, 2025</div>
                        <div class="text-sm text-gray-500">2 days ago</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Pending Review
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <div class="flex gap-1 items-center w-fit bg-green-500 px-2 py-1 rounded-lg text-white">
                            <i class="fas fa-check"></i>Verify
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>