<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 h-screen w-64 bg-white shadow-lg transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-40">
        <!-- Logo -->
        <div class="flex items-center justify-center h-16 border-b">
            <span class="text-red-600 font-bold text-2xl">EDUCARE ADMIN</span>
        </div>
    
        <!-- Navigation Menu -->
        <nav class="py-4">
            <!-- Admin Info -->
            <div class="px-4 mb-3">
                <div class="flex items-center gap-3 px-4 py-2 text-gray-600">
                    <i class="fas fa-user-shield text-xl"></i>
                    <span class="font-medium">Admin Name</span>
                </div>
            </div>
    
            <!-- Sidebar Links -->
            <div class="px-4 space-y-1">
                <!-- Dashboard -->
                <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-2 text-red-600 bg-red-50 rounded-lg">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
    
                <!-- Content Management -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Content Management</p>
                    <a href="/admin/categories" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-folder"></i>
                        <span>Categories</span>
                    </a>
                    <a href="/admin/tags" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-tags"></i>
                        <span>Tags</span>
                    </a>
                </div>
    
                <!-- Teacher Management -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Teacher Management</p>
                    <a href="/admin/teachers" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Verified Teachers</span>
                    </a>
                    <a href="/admin/teachers/unverified" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-user-clock"></i>
                        <span>Unverified Teachers</span>
                    </a>
                </div>
    
                <!-- Student Management -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Student Management</p>
                    <a href="/admin/students" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-user-graduate"></i>
                        <span>Active Students</span>
                    </a>
                    <a href="/admin/students/banned" class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-user-slash"></i>
                        <span>Banned Students</span>
                    </a>
                </div>
    
                <!-- Logout Section -->
                <div class="space-y-1 pt-2">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase">Account</p>
                    <a href="/admin/logout" class="flex items-center gap-3 px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg">
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
            <!-- Stats Overview Cards -->
            <section class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Total Teachers Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Total Teachers</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">245</h3>
                            </div>
                            <div class="bg-blue-50 p-3 rounded-lg">
                                <i class="fas fa-chalkboard-teacher text-blue-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-green-600 flex items-center gap-1 mt-1">
                            <i class="fas fa-arrow-up text-xs"></i> 12 new this month
                        </span>
                    </div>
            
                    <!-- Pending Verifications -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Pending Verifications</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">18</h3>
                            </div>
                            <div class="bg-yellow-50 p-3 rounded-lg">
                                <i class="fas fa-user-clock text-yellow-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-red-600 flex items-center gap-1 mt-1">
                            <i class="fas fa-exclamation-circle text-xs"></i> Requires attention
                        </span>
                    </div>
            
                    <!-- Active Students -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Active Students</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">5,234</h3>
                            </div>
                            <div class="bg-green-50 p-3 rounded-lg">
                                <i class="fas fa-user-graduate text-green-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-green-600 flex items-center gap-1 mt-1">
                            <i class="fas fa-arrow-up text-xs"></i> 3.2% from last week
                        </span>
                    </div>
            
                    <!-- Banned Users -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-medium text-gray-500">Banned Users</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">23</h3>
                            </div>
                            <div class="bg-red-50 p-3 rounded-lg">
                                <i class="fas fa-user-slash text-red-500 text-xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-gray-600 flex items-center gap-1 mt-1">
                            Total banned accounts
                        </span>
                    </div>
                </div>
            </section>
            
            <!-- Charts Section -->
            <section class="mb-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- User Growth Chart -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Platform Growth</h3>
                        <canvas id="growthChart" height="300"></canvas>
                    </div>
            
                    <!-- Categories Distribution -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Course Categories Distribution</h3>
                        <canvas id="categoriesChart" height="300"></canvas>
                    </div>
                </div>
            </section>
        
            <!-- Recent Activities Section -->
            <section>
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activities</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-100 p-2 rounded-full">
                                <i class="fas fa-user-check text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-800">New teacher verification request from John Smith</p>
                                <p class="text-sm text-gray-500">2 hours ago</p>
                            </div>
                            <button class="ml-auto bg-blue-500 text-white px-4 py-2 rounded-lg text-sm">Review</button>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-red-100 p-2 rounded-full">
                                <i class="fas fa-flag text-red-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-800">Report submitted against course "Advanced Python"</p>
                                <p class="text-sm text-gray-500">5 hours ago</p>
                            </div>
                            <button class="ml-auto bg-red-500 text-white px-4 py-2 rounded-lg text-sm">Investigate</button>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-green-100 p-2 rounded-full">
                                <i class="fas fa-tag text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-800">New category "Artificial Intelligence" added</p>
                                <p class="text-sm text-gray-500">1 day ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="flex h-16 items-center justify-between px-4 py-3">
                <h1 class="text-xl font-semibold text-gray-800">Admin Dashboard</h1>
                
                <div class="flex items-center gap-4">
                    <button id="sidebarToggle" class="lg:hidden bg-red-600 text-white p-2 rounded-lg">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </header>
    </main>

    <!-- JavaScript for Charts -->
    <script>
        // Growth Chart Data
        const growthData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Teachers',
                data: [150, 170, 180, 190, 210, 245],
                borderColor: '#3B82F6',
                tension: 0.4,
                fill: false
            }, {
                label: 'Students',
                data: [3000, 3500, 4000, 4500, 5000, 5234],
                borderColor: '#10B981',
                tension: 0.4,
                fill: false
            }]
        };
    
        // Categories Chart Data
        const categoriesData = {
            labels: ['Programming', 'Data Science', 'Business', 'Design', 'Marketing'],
            datasets: [{
                data: [30, 25, 20, 15, 10],
                backgroundColor: ['#3B82F6', '#10B981', '#F59E0B', '#7C3AED', '#EF4444']
            }]
        };
    
        // Render Growth Chart
        const growthCtx = document.getElementById('growthChart').getContext('2d');
        new Chart(growthCtx, {
            type: 'line',
            data: growthData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
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
    
        // Render Categories Chart
        const categoriesCtx = document.getElementById('categoriesChart').getContext('2d');
        new Chart(categoriesCtx, {
            type: 'pie',
            data: categoriesData,
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
    <!-- Previous code remains the same until right before the closing </body> tag. Add this script right before </body>: -->

    <!-- Add this right before closing body tag -->
    <script>
        // Mobile menu toggle functionality
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
            } else {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
            }
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            
            if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>
</html>