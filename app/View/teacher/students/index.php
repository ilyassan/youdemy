<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 h-screen w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-40">
        <!-- Logo -->
        <div class="flex items-center justify-center h-16 border-b">
            <span class="text-indigo-600 font-bold text-2xl">EDUCARE</span>
        </div>
    
        <!-- Navigation Menu -->
        <nav class="py-4">
            <!-- User Info -->
            <div class="px-4 mb-3">
                <div class="flex items-center gap-3 px-4 py-2 text-gray-600">
                    <i class="fas fa-user-circle text-xl"></i>
                    <span class="font-medium">Teacher Name</span>
                </div>
            </div>
    
            <!-- Sidebar Links -->
            <div class="px-4 space-y-1">
                <!-- Dashboard -->
                <a href="/teacher/dashboard" class="flex items-center gap-3 px-4 py-2 text-indigo-600 bg-indigo-100 rounded-lg">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
    
                <!-- Course Management Section -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Courses</p>
                    <a href="/teacher/courses" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-book"></i>
                        <span>My Courses</span>
                    </a>
                    <a href="/teacher/courses/create" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-plus-circle"></i>
                        <span>Create Course</span>
                    </a>
                </div>
    
                <!-- Student Management Section -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Students</p>
                    <a href="/teacher/students" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-users"></i>
                        <span>All Students</span>
                    </a>
                    <a href="/teacher/students/grades" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Gradebook</span>
                    </a>
                </div>
    
                <!-- Resources Section -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Resources</p>
                    <a href="/teacher/resources" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-folder-open"></i>
                        <span>My Resources</span>
                    </a>
                    <a href="/teacher/resources/upload" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-upload"></i>
                        <span>Upload Resources</span>
                    </a>
                </div>
    
                <!-- Logout Section -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Logout</p>
                    <a href="/logout" class="flex items-center gap-3 px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </nav>
    </aside>
    
     <!-- Main Content -->
     <main class="lg:ml-64 min-h-screen flex flex-col-reverse">
     <div class="p-6 bg-gray-100">
        <!-- Student Table Section -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-6">
            
            <!-- Table Header -->
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" placeholder="Search by name or email" class="bg-white border border-gray-300 rounded-lg px-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        <i class="fas fa-search absolute right-2 top-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none">Filter</button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 focus:outline-none">Export</button>
                </div>
            </div>
            
            <!-- Table -->
            <table class="w-full text-left table-auto">
                <thead>
                    <tr class="border-b border-gray-200 text-gray-600">
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Enrolled Courses</th>
                        <th class="py-3 px-4">Total Spent</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    <!-- Student 1 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">John Doe</td>
                        <td class="py-4 px-4 text-gray-500">johndoe@example.com</td>
                        <td class="py-4 px-4 text-gray-800">5</td>
                        <td class="py-4 px-4 text-gray-800">$500</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    
                    <!-- Student 2 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">Jane Smith</td>
                        <td class="py-4 px-4 text-gray-500">janesmith@example.com</td>
                        <td class="py-4 px-4 text-gray-800">3</td>
                        <td class="py-4 px-4 text-gray-800">$300</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    
                    <!-- Student 3 -->
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4 text-gray-800">Alice Johnson</td>
                        <td class="py-4 px-4 text-gray-500">alicejohnson@example.com</td>
                        <td class="py-4 px-4 text-gray-800">7</td>
                        <td class="py-4 px-4 text-gray-800">$700</td>
                        <td class="py-4 px-4">
                            <button class="px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none">View Profile</button>
                        </td>
                    </tr>
                    
                    <!-- More students can be added here -->
                </tbody>
            </table>
            
        </div>
    </div>



        <header class="bg-white shadow-sm">
            <div class="flex h-16 items-center justify-between px-4 py-3">
                <h1 class="text-xl font-semibold text-gray-800"><?= $titlePage ?? "Dashboard" ?></h1>
                
                <div class="flex items-center gap-4">
                    <button id="sidebarToggle" class="lg:hidden bg-primary text-white p-2 rounded-lg">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </header>
     </main>

    <!-- JavaScript for Charts -->
    <script>
        // Enrollment Chart Data
        const enrollmentData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Enrollments',
                data: [100, 120, 150, 140, 160, 180],
                borderColor: '#3B82F6',
                tension: 0.4,
                fill: true,
                backgroundColor: 'rgba(59, 130, 246, 0.1)'
            }]
        };
    
        // Popularity Chart Data
        const popularityData = {
            labels: ['Data Science', 'Python Programming', 'Web Development', 'Machine Learning'],
            datasets: [{
                data: [200, 150, 180, 220],
                backgroundColor: ['#3B82F6', '#10B981', '#F59E0B', '#7C3AED']
            }]
        };
    
        // Render Enrollment Chart
        const enrollmentCtx = document.getElementById('enrollmentChart').getContext('2d');
        new Chart(enrollmentCtx, {
            type: 'line',
            data: enrollmentData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    
        // Render Popularity Chart
        const popularityCtx = document.getElementById('popularityChart').getContext('2d');
        new Chart(popularityCtx, {
            type: 'doughnut',
            data: popularityData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>
</html>