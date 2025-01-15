
    <nav class="bg-white shadow-lg relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <span class="text-indigo-600 text-3xl font-bold">YouDemy</span>
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="Open navigation">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-indigo-600 flex items-center">
                        <i class="fas fa-compass mr-2"></i>
                        Explore
                    </a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 flex items-center">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        My Learning
                    </a>
                    <button class="bg-indigo-600 text-white px-6 py-2 rounded-full font-medium hover:bg-indigo-700 transition">
                        Get Started
                    </button>
                </div>
            </div>
        </div>

        <div class="mobile-menu absolute top-full left-0 w-full bg-white shadow-md z-50 hidden md:hidden" id="mobile-menu">
            <div class="px-4 py-2 border-b border-gray-200">
                <input type="text" class="w-full px-4 py-2 rounded-md bg-gray-100 focus:ring-2 focus:ring-indigo-500" placeholder="Search...">
            </div>
            <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100 border-b border-gray-200">Explore</a>
            <a href="#" class="block px-4 py-3 text-gray-800 hover:bg-gray-100 border-b border-gray-200">My Learning</a>
            <button class="block w-full px-4 py-3 text-center bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition">
                Get Started
            </button>
        </div>
    </nav>


    <main class="py-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <!-- Logo/Icon -->
            <div class="flex justify-center">
                <div class="h-12 w-12 rounded-xl bg-indigo-500 flex items-center justify-center">
                    <i class="fas fa-user text-white text-xl"></i>
                </div>
            </div>
            
            <!-- Heading -->
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Welcome back
            </h2>
        </div>

        <!-- Login Form -->
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-lg sm:rounded-xl sm:px-10">
                <form class="space-y-6" action="#" method="POST">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter your email"
                                required
                            >
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                placeholder="Enter your password"
                                required
                            >
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button
                            type="submit"
                            class="w-full flex justify-center items-center gap-2 py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200"
                        >
                            Sign in
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Sign Up Link -->
            <p class="mt-8 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Sign Up
                </a>
            </p>
        </div>
    </main>


    
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">YouDemy</h3>
                    <p class="text-gray-400">Empowering learners worldwide with quality education and practical skills.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="mt-4">
                        <h5 class="text-sm font-semibold mb-2">Subscribe to our newsletter</h5>
                        <div class="flex">
                            <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-l-md w-full text-gray-900">
                            <button class="bg-primary-600 px-4 py-2 rounded-r-md hover:bg-primary-700">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2025 YouDemy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close the menu when clicking outside of it
        document.addEventListener('click', (event) => {
            const targetElement = event.target;

            if (mobileMenu.classList.contains('hidden')) {
                return;
            }

            if (targetElement === mobileMenuButton || mobileMenuButton.contains(targetElement)) {
                return;
            }

            if (targetElement === mobileMenu || mobileMenu.contains(targetElement)) {
                return;
            }

            mobileMenu.classList.add('hidden');
        });

        // Ensure the mobile menu is hidden on larger screens
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>