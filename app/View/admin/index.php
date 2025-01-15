
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
            <span class="text-sm font-medium text-indigo-600 flex items-center gap-1 mt-1">
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
                <div class="bg-indigo-50 p-3 rounded-lg">
                    <i class="fas fa-user-slash text-indigo-500 text-xl"></i>
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
                <div class="bg-indigo-100 p-2 rounded-full">
                    <i class="fas fa-flag text-indigo-600"></i>
                </div>
                <div>
                    <p class="text-gray-800">Report submitted against course "Advanced Python"</p>
                    <p class="text-sm text-gray-500">5 hours ago</p>
                </div>
                <button class="ml-auto bg-indigo-500 text-white px-4 py-2 rounded-lg text-sm">Investigate</button>
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

<!-- JavaScript for Charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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