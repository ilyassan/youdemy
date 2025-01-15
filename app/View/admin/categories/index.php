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
            <span class="text-indigo-600 font-bold text-2xl">EDUCARE ADMIN</span>
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
                <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-2 text-indigo-600 bg-indigo-50 rounded-lg">
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
            <section class="p-6">
                <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Add New Category</h3>
                    
                    <form action="<?= htmlspecialchars(URLROOT . 'categories/store') ?>" method="POST" class="flex flex-col gap-4">
                        <!-- Category Name Input -->
                        <div class="flex-1">
                            <label for="category_name" class="block mb-2 text-sm font-medium text-gray-700">
                                Category Name
                            </label>
                            <div id="inputs" class="space-y-3">
                                <input 
                                    type="text" 
                                    name="categories_name[]" 
                                    class="w-full rounded-lg border border-gray-300 p-2.5 text-gray-700 focus:ring-1 focus:ring-indigo-600 focus:border-indigo-600 ring-indigo-600 outline-none"
                                    placeholder="Enter category name"
                                    autocomplete="off"
                                />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-between items-center">
                            <div class="flex gap-6 text-indigo-600 ring-indigo-600 text-3xl">
                                <button 
                                    type="button"
                                    onclick="addInput()"
                                >
                                    <i class="fas fa-plus"></i>
                                </button>
                                <button 
                                    type="button"
                                    onclick="removeInput()"
                                >
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <button 
                                type="submit"
                                class="w-full sm:w-auto px-6 py-2.5 bg-indigo-600 ring-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-600 ring-indigo-600/90 transition-colors"
                            >
                                Save
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Categories List Card -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Course Categories</h3>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-sm">
                            15 Categories
                        </span>
                    </div>

                    <!-- Categories Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="group shadow-md relative bg-gray-50 rounded-lg p-4 hover:bg-gray-100 transition-colors">
                            <!-- Category Name -->
                            <h4 class="text-gray-700 font-medium">Information theory</h4>
                            
                            <!-- Delete Button -->
                            <button 
                                onclick="confirmDelete('Information theory', '1')"
                                class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity p-2 hover:text-red-600"
                            >
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Delete Confirmation Modal -->
            <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                <div class="bg-white rounded-lg p-6 w-full max-w-sm mx-4">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Delete Category</h3>
                    <p class="text-gray-600 mb-6">Are you sure you want to delete "<span id="categoryToDelete"></span>"? This action cannot be undone.</p>
                    
                    <div class="flex justify-end gap-4">
                        <button 
                            onclick="closeDeleteModal()"
                            class="px-4 py-2 text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors"
                        >
                            Cancel
                        </button>
                        <form action="<?= htmlspecialchars(URLROOT . 'categories/delete') ?>" method="POST">
                            <input id="category_id" type="hidden" name="category_id" value="">
                            <button
                                type="submit"
                                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors"
                            >
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                let categoryToDelete = '';

                function confirmDelete(category, id) {
                    categoryToDelete = category;
                    document.getElementById('category_id').value = id;

                    document.getElementById('categoryToDelete').textContent = category;
                    document.getElementById('deleteModal').classList.remove('hidden');
                    document.getElementById('deleteModal').classList.add('flex');
                }

                function closeDeleteModal() {
                    document.getElementById('deleteModal').classList.remove('flex');
                    document.getElementById('deleteModal').classList.add('hidden');
                    categoryToDelete = '';
                    document.getElementById('category_id').value = category;
                }

                document.getElementById('deleteModal').addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeDeleteModal();
                    }
                });

                let inputsContainer = document.getElementById('inputs');
                let count = 1;
                let inputCopy = inputsContainer.firstElementChild.cloneNode(true);

                function addInput() {
                    count++;
                    inputsContainer.appendChild(inputCopy.cloneNode(true));
                }

                function removeInput(){
                    if (count > 1) {
                        count--;
                        inputsContainer.removeChild(inputsContainer.lastElementChild);
                    }
                }
            </script>
        </div>

        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="flex h-16 items-center justify-between px-4 py-3">
                <h1 class="text-xl font-semibold text-gray-800">Admin Dashboard</h1>
                
                <div class="flex items-center gap-4">
                    <button id="sidebarToggle" class="lg:hidden bg-indigo-600 text-white p-2 rounded-lg">
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