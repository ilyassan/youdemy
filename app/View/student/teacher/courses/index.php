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
     <div class="p-4 bg-gray-100">
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