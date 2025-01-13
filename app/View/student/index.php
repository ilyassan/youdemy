<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouDemy - Transform Your Learning Journey</title>
    <link href=<?= URLASSETS ."css/all.min.css"?> rel="stylesheet" />
    <link href=<?= URLASSETS ."css/fontawesome.min.css"?> rel="stylesheet" />
    <link href=<?= URLASSETS ."css/output.css"?> rel="stylesheet" />
</head>
<body class="bg-gray-50">
    <!-- Enhanced Navbar with Learning Dashboard -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <span class="text-indigo-600 text-3xl font-bold">YouDemy</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="Open navigation">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                </div>

                <!-- Desktop Menu -->
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

        <!-- Mobile Menu (Hidden by default) -->
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

    <!-- Improved Hero Section with AI Learning Assistant -->
    <div class="pt-20 bg-gradient-to-r from-indigo-600 to-blue-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Personalized Learning, Powered by AI</h1>
                <p class="text-lg md:text-xl mb-8 text-indigo-100">Experience adaptive learning paths tailored to your goals, pace, and learning style.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="bg-white text-indigo-600 px-8 py-3 rounded-full font-medium hover:bg-indigo-50 transition">
                        Start Learning
                    </button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-full font-medium hover:bg-white hover:text-indigo-600 transition">
                        Take Assessment
                    </button>
                </div>
            </div>
            <div class="relative hidden md:block">
                <img src="https://placehold.co/600x400" alt="Learning Dashboard" class="rounded-lg shadow-xl">
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-robot text-3xl text-indigo-600"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">AI Learning Assistant</h3>
                            <p class="text-sm text-gray-600">24/7 personalized support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Categories Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Browse by Category</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <a href="#" class="group">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-laptop-code text-2xl text-indigo-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600">Programming</h3>
                            <p class="text-sm text-gray-500">1,200+ courses</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="group">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-chart-pie text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-blue-600">Business</h3>
                            <p class="text-sm text-gray-500">850+ courses</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="group">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-paint-brush text-2xl text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-purple-600">Design</h3>
                            <p class="text-sm text-gray-500">750+ courses</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="group">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all transform hover:-translate-y-1 border border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-language text-2xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 group-hover:text-green-600">Languages</h3>
                            <p class="text-sm text-gray-500">500+ courses</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Popular Tags Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Popular Topics</h3>
            <div class="flex flex-wrap gap-3">
                <a href="#" class="px-6 py-2 bg-white text-indigo-600 rounded-full text-sm font-medium border border-indigo-100 hover:bg-indigo-50 hover:border-indigo-200 transition-all">Python</a>
                <a href="#" class="px-6 py-2 bg-white text-blue-600 rounded-full text-sm font-medium border border-blue-100 hover:bg-blue-50 hover:border-blue-200 transition-all">Web Development</a>
                <a href="#" class="px-6 py-2 bg-white text-purple-600 rounded-full text-sm font-medium border border-purple-100 hover:bg-purple-50 hover:border-purple-200 transition-all">UI/UX Design</a>
                <a href="#" class="px-6 py-2 bg-white text-green-600 rounded-full text-sm font-medium border border-green-100 hover:bg-green-50 hover:border-green-200 transition-all">Digital Marketing</a>
                <a href="#" class="px-6 py-2 bg-white text-red-600 rounded-full text-sm font-medium border border-red-100 hover:bg-red-50 hover:border-red-200 transition-all">Data Science</a>
                <a href="#" class="px-6 py-2 bg-white text-orange-600 rounded-full text-sm font-medium border border-orange-100 hover:bg-orange-50 hover:border-orange-200 transition-all">Machine Learning</a>
            </div>
        </div>
    </div>

    <!-- Featured Courses Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-10">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Featured Courses</h2>
            <div class="flex items-center space-x-4">
                <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition">
                    <i class="fas fa-chevron-left text-gray-600"></i>
                </button>
                <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition">
                    <i class="fas fa-chevron-right text-gray-600"></i>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Course Card -->
            <div class="bg-white flex flex-col rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://placehold.co/400x225" alt="UI/UX Design" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-medium text-green-600">
                        New
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-sm text-gray-500 ml-2">(5.0) · 3,421 ratings</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600">UI/UX Design Masterclass 2025</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn modern UI/UX design principles and create stunning user interfaces using Figma and Adobe XD.</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://placehold.co/32x32" alt="Instructor" class="w-8 h-8 rounded-full">
                                <span class="text-sm text-gray-600">Alex Chen</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900">$79.99</span>
                        </div>
                        <button class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course Card -->
            <div class="bg-white flex flex-col rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://placehold.co/400x225" alt="UI/UX Design" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-medium text-green-600">
                        New
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-sm text-gray-500 ml-2">(5.0) · 3,421 ratings</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600">UI/UX Design Masterclass 2025</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn modern UI/UX design principles and create stunning user interfaces using Figma and Adobe XD.</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://placehold.co/32x32" alt="Instructor" class="w-8 h-8 rounded-full">
                                <span class="text-sm text-gray-600">Alex Chen</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900">$79.99</span>
                        </div>
                        <button class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Course Card -->
            <div class="bg-white flex flex-col rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition-all">
                <div class="relative">
                    <img src="https://placehold.co/400x225" alt="UI/UX Design" class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-medium text-green-600">
                        New
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-sm text-gray-500 ml-2">(5.0) · 3,421 ratings</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-indigo-600">UI/UX Design Masterclass 2025</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn modern UI/UX design principles and create stunning user interfaces using Figma and Adobe XD.</p>
                    </div>
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="https://placehold.co/32x32" alt="Instructor" class="w-8 h-8 rounded-full">
                                <span class="text-sm text-gray-600">Alex Chen</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900">$79.99</span>
                        </div>
                        <button class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="text-center mt-12">
            <button class="px-8 py-3 bg-white text-indigo-600 rounded-lg font-medium border border-indigo-200 hover:bg-indigo-50 transition-all">
                View All Courses
            </button>
        </div>
    </div>

    <!-- Learning Paths Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Curated Learning Paths</h2>
            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium">View All Paths →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition">
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6">
                    <i class="fas fa-code text-4xl text-white mb-4"></i>
                    <h3 class="text-xl font-bold text-white">Full-Stack Development</h3>
                    <p class="text-blue-100 mt-2">Master modern web development</p>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <i class="fas fa-clock mr-2"></i>
                        6 months · 20 courses
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Industry-aligned curriculum</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">1-on-1 mentorship</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Real-world projects</span>
                        </div>
                    </div>
                    <button class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                        Explore Path
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition">
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-6">
                    <i class="fas fa-brain text-4xl text-white mb-4"></i>
                    <h3 class="text-xl font-bold text-white">AI & Machine Learning</h3>
                    <p class="text-purple-100 mt-2">Build intelligent systems</p>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <i class="fas fa-clock mr-2"></i>
                        8 months · 25 courses
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Advanced algorithms</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Cloud integration</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Research papers access</span>
                        </div>
                    </div>
                    <button class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                        Explore Path
                    </button>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:shadow-xl transition">
                <div class="bg-gradient-to-r from-orange-500 to-red-500 p-6">
                    <i class="fas fa-chart-line text-4xl text-white mb-4"></i>
                    <h3 class="text-xl font-bold text-white">Data Analytics</h3>
                    <p class="text-orange-100 mt-2">Drive data-based decisions</p>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <i class="fas fa-clock mr-2"></i>
                        5 months · 18 courses
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Business intelligence</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Statistical analysis</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            <span class="text-gray-700">Visualization mastery</span>
                        </div>
                    </div>
                    <button class="w-full mt-6 bg-indigo-600 text-white py-3 rounded-lg font-medium hover:bg-indigo-700 transition">
                        Explore Path
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Learning Features -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Learn by Doing</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-vr-cardboard text-2xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Virtual Labs</h3>
                    <p class="text-gray-600">Practice in real-time with interactive simulations and virtual environments.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Peer Learning</h3>
                    <p class="text-gray-600">Collaborate with peers worldwide on projects and problem-solving sessions.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-trophy text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Skill Challenges</h3>
                    <p class="text-gray-600">Test your knowledge with industry-standard assessments and earn certificates.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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