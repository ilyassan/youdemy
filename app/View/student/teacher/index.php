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
     <main class="lg:ml-64 min-h-screen">
        <header class="bg-white shadow-sm">
            <div class="flex h-16 items-center justify-between px-4 py-3">
                <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
                
                <div class="flex items-center gap-4">
                    <button id="sidebarToggle" class="lg:hidden bg-primary text-white p-2 rounded-lg">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </header>

        <div class="p-4 bg-gray-100">



            <!-- Stats Overview Cards -->
            <section class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Monthly Enrollments Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Monthly Enrollments</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">120</h3>
                            </div>
                            <div class="bg-blue-50 p-3 rounded-lg">
                                <i class="fas fa-user-plus text-blue-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-green-600 flex items-center gap-1 mt-1">
                            <i class="fas fa-arrow-up text-xs"></i> 5.20% from last month
                        </span>
                    </div>
            
                    <!-- Monthly Course Completions Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Monthly Course Completions</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">30</h3>
                            </div>
                            <div class="bg-green-50 p-3 rounded-lg">
                                <i class="fas fa-graduation-cap text-green-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-red-600 flex items-center gap-1 mt-1">
                            <i class="fas fa-arrow-down text-xs"></i> -2 from last month
                        </span>
                    </div>
            
                    <!-- Total Students Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Total Students</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">1200</h3>
                            </div>
                            <div class="bg-purple-50 p-3 rounded-lg">
                                <i class="fas fa-users text-purple-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-gray-600 flex items-center gap-1 mt-1">
                            Total registered students
                        </span>
                    </div>
            
                    <!-- Average Course Rating Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Average Course Rating</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">4.5</h3>
                                <div class="flex items-center gap-1 mt-1 text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="bg-yellow-50 p-3 rounded-lg">
                                <i class="fas fa-star text-yellow-500 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Charts Section -->
            <section class="mb-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Student Enrollment Over Time Chart -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Student Enrollment Over Time</h3>
                        <canvas id="enrollmentChart" height="300"></canvas>
                    </div>
            
                    <!-- Course Popularity Distribution -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Course Popularity Distribution</h3>
                        <canvas id="popularityChart" height="300"></canvas>
                    </div>
                </div>
            </section>
        
            <!-- Highlights Section -->
            <section>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Most Popular Course Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Most Popular Course</h3>
                        <div class="flex gap-4">
                            <div class="max-w-[55%]">
                                <img src="https://via.placeholder.com/200" alt="Top Course" class="object-cover rounded-lg">
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800">Advanced Machine Learning</h4>
                                <div class="flex items-center gap-1 text-yellow-400 mt-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ml-2 text-gray-600">(4.5)</span>
                                </div>
                                <p class="text-gray-600 mt-2">Category: Data Science</p>
                                <p class="text-blue-600 font-semibold mt-2">Price: $199</p>
                            </div>
                        </div>
                    </div>
            
                    <!-- Recent Educational Activities Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Educational Activities</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="bg-green-100 p-2 rounded-full">
                                    <i class="fas fa-check text-green-600"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">John Doe enrolled in Advanced Machine Learning</p>
                                    <p class="text-sm text-gray-500">2 days ago</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-blue-100 p-2 rounded-full">
                                    <i class="fas fa-graduation-cap text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">Jane Smith completed Data Analysis Course</p>
                                    <p class="text-sm text-gray-500">5 days ago</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="bg-yellow-100 p-2 rounded-full">
                                    <i class="fas fa-star text-yellow-600"></i>
                                </div>
                                <div>
                                    <p class="text-gray-800">Mark Johnson rated Python Programming 5 stars</p>
                                    <p class="text-sm text-gray-500">1 week ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            
        </div>

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