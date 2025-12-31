

    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator" id="scrollIndicator"></div>
    
    <!-- Navigation -->
    <nav class="fixed w-full z-50 p-4 navbar-glass" id="navbar">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold gradient-text">AJ</div>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-purple-400 transition-colors duration-300">Home</a>
                <a href="#about" class="hover:text-purple-400 transition-colors duration-300">About</a>
                <a href="#education" class="hover:text-purple-400 transition-colors duration-300">Education</a>
                <a href="#projects" class="hover:text-purple-400 transition-colors duration-300">Projects</a>
                <a href="#skills" class="hover:text-purple-400 transition-colors duration-300">Skills</a>
                <a href="#blog" class="hover:text-purple-400 transition-colors duration-300">Blog</a>
                <a href="#testimonials" class="hover:text-purple-400 transition-colors duration-300">Testimonials</a>
                <a href="#contact" class="hover:text-purple-400 transition-colors duration-300">Contact</a>
            </div>
            <button class="md:hidden" id="menuToggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden mt-4 space-y-4" id="mobileMenu">
            <a href="#home" class="block hover:text-purple-400 transition-colors duration-300">Home</a>
            <a href="#about" class="block hover:text-purple-400 transition-colors duration-300">About</a>
            <a href="#education" class="block hover:text-purple-400 transition-colors duration-300">Education</a>
            <a href="#projects" class="block hover:text-purple-400 transition-colors duration-300">Projects</a>
            <a href="#skills" class="block hover:text-purple-400 transition-colors duration-300">Skills</a>
            <a href="#blog" class="block hover:text-purple-400 transition-colors duration-300">Blog</a>
            <a href="#testimonials" class="block hover:text-purple-400 transition-colors duration-300">Testimonials</a>
            <a href="#contact" class="block hover:text-purple-400 transition-colors duration-300">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center gradient-bg relative overflow-hidden">
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full floating"></div>
        <div class="absolute top-40 right-20 w-32 h-32 bg-white bg-opacity-5 rounded-full floating-delayed"></div>
        <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-white bg-opacity-10 rounded-full floating"></div>
        
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center md:text-left z-10">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 fade-in">
                    Shahidul <span class="text-yellow-300">Islam</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-200 fade-in">Full Stack Developer </p>
                <p class="text-lg mb-12 text-gray-300 fade-in">
                    I craft beautiful digital experiences that blend creativity with cutting-edge technology. 
                    Welcome to my world of innovation and design.
                </p>
                <div class="space-y-4 md:space-y-0 md:space-x-4 fade-in">
                    <a href="#projects" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover-glow magnetic-button inline-block w-full md:w-auto">
                        View My Work
                    </a>
                    <a href="#contact" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition-all duration-300 magnetic-button inline-block w-full md:w-auto">
                        Get In Touch
                    </a>
                </div>
                
            </div>
            
            <!-- Right Image -->
            <div class="flex justify-center fade-in">
                <div class="relative">
                    <div class="w-80 h-80 md:w-96 md:h-96 rounded-full overflow-hidden border-4 border-white border-opacity-30 shadow-2xl">
                        <img src="1.jpg" 
                             alt="Alex Johnson - Creative Developer" 
                             class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative rings -->
                    <div class="absolute -inset-4 rounded-full border-2 border-yellow-300 border-opacity-30 floating"></div>
                    <div class="absolute -inset-8 rounded-full border-2 border-white border-opacity-20 floating-delayed"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text">About Me</h2>
                    <p class="text-lg text-gray-300 mb-6">
                        I'm a passionate creative developer with over 5 years of experience in crafting digital experiences 
                        that not only look stunning but also deliver exceptional user experiences. My journey began with a 
                        fascination for the intersection of art and technology.
                    </p>
                    <p class="text-lg text-gray-300 mb-8">
                        When I'm not coding, you'll find me exploring new design trends, experimenting with digital art, 
                        or contributing to open-source projects. I believe in the power of clean code and beautiful design 
                        to create meaningful connections between brands and their audiences.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-gray-700 rounded-lg">
                            <div class="text-3xl font-bold gradient-text">10+</div>
                            <div class="text-gray-400">Projects</div>
                        </div>
                        <div class="text-center p-4 bg-gray-700 rounded-lg">
                            <div class="text-3xl font-bold gradient-text">1.5+</div>
                            <div class="text-gray-400">Years</div>
                        </div>
                    </div>
                </div>
                <div class="slide-in-right">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-500 p-1 rounded-2xl">
                        <img src="1.jpg" 
                             alt="Alex Johnson - Creative Developer" 
                             class="w-full h-96 object-cover rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education & Qualifications Section -->
    <section id="education" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text fade-in">Education & Qualifications</h2>
            
            <!-- Education Timeline -->
            <div class="mb-16">
                <h3 class="text-2xl font-bold text-center mb-12 text-purple-400 fade-in">Academic Background</h3>
                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-purple-500 to-indigo-600"></div>
                    
                    <!-- Education Items -->
                    <div class="space-y-12">
                        <!-- Master's Degree -->
                        <div class="flex items-center relative slide-in-left">
                            <div class="w-1/2 pr-8 text-right">
                                <div class="bg-gray-800 p-6 rounded-xl hover-glow">
                                    <div class="flex items-center justify-end mb-3">
                                        <i class="fas fa-graduation-cap text-purple-400 text-2xl mr-3"></i>
                                        <span class="bg-purple-600 text-xs px-3 py-1 rounded-full text-white">2020-2022</span>
                                    </div>
                                    <h4 class="text-xl font-bold mb-2">Master of Computer Science</h4>
                                    <p class="text-purple-400 font-semibold mb-2">Stanford University</p>
                                    <p class="text-gray-300 text-sm">Specialized in Software Engineering and AI</p>
                                    <p class="text-gray-400 text-sm">GPA: 3.9/4.0</p>
                                </div>
                            </div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-purple-500 rounded-full border-4 border-gray-900"></div>
                            <div class="w-1/2 pl-8"></div>
                        </div>

                        <!-- Bachelor's Degree -->
                        <div class="flex items-center relative slide-in-right">
                            <div class="w-1/2 pr-8"></div>
                            <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-indigo-500 rounded-full border-4 border-gray-900"></div>
                            <div class="w-1/2 pl-8">
                                <div class="bg-gray-800 p-6 rounded-xl hover-glow">
                                    <div class="flex items-center mb-3">
                                        <span class="bg-indigo-600 text-xs px-3 py-1 rounded-full text-white">2016-2020</span>
                                        <i class="fas fa-university text-indigo-400 text-2xl ml-3"></i>
                                    </div>
                                    <h4 class="text-xl font-bold mb-2">Bachelor of Software Engineering</h4>
                                    <p class="text-indigo-400 font-semibold mb-2">University of California, Berkeley</p>
                                    <p class="text-gray-300 text-sm">Focus on Web Development and Database Systems</p>
                                    <p class="text-gray-400 text-sm">Magna Cum Laude - GPA: 3.8/4.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certifications Grid -->
            <div>
                <h3 class="text-2xl font-bold text-center mb-12 text-purple-400 fade-in">Professional Certifications</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- AWS Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fab fa-aws text-4xl text-orange-400 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">AWS Solutions Architect</h4>
                        <p class="text-gray-400 text-sm mb-2">Associate Level</p>
                        <p class="text-orange-400 text-xs">Valid until 2025</p>
                        <div class="mt-3">
                            <span class="bg-orange-600 text-xs px-3 py-1 rounded-full">Cloud Computing</span>
                        </div>
                    </div>

                    <!-- Google Cloud Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fab fa-google text-4xl text-blue-400 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Google Cloud Professional</h4>
                        <p class="text-gray-400 text-sm mb-2">Cloud Developer</p>
                        <p class="text-blue-400 text-xs">Valid until 2024</p>
                        <div class="mt-3">
                            <span class="bg-blue-600 text-xs px-3 py-1 rounded-full">GCP</span>
                        </div>
                    </div>

                    <!-- MongoDB Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fas fa-leaf text-4xl text-green-400 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">MongoDB Developer</h4>
                        <p class="text-gray-400 text-sm mb-2">Associate Level</p>
                        <p class="text-green-400 text-xs">Valid until 2025</p>
                        <div class="mt-3">
                            <span class="bg-green-600 text-xs px-3 py-1 rounded-full">Database</span>
                        </div>
                    </div>

                    <!-- React Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fab fa-react text-4xl text-cyan-400 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">React Developer</h4>
                        <p class="text-gray-400 text-sm mb-2">Meta Certified</p>
                        <p class="text-cyan-400 text-xs">Valid until 2024</p>
                        <div class="mt-3">
                            <span class="bg-cyan-600 text-xs px-3 py-1 rounded-full">Frontend</span>
                        </div>
                    </div>

                    <!-- Docker Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fab fa-docker text-4xl text-blue-500 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Docker Certified</h4>
                        <p class="text-gray-400 text-sm mb-2">Associate Level</p>
                        <p class="text-blue-400 text-xs">Valid until 2025</p>
                        <div class="mt-3">
                            <span class="bg-blue-600 text-xs px-3 py-1 rounded-full">DevOps</span>
                        </div>
                    </div>

                    <!-- Laravel Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fab fa-laravel text-4xl text-red-500 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Laravel Expert</h4>
                        <p class="text-gray-400 text-sm mb-2">Advanced Level</p>
                        <p class="text-red-400 text-xs">Valid until 2024</p>
                        <div class="mt-3">
                            <span class="bg-red-600 text-xs px-3 py-1 rounded-full">PHP Framework</span>
                        </div>
                    </div>

                    <!-- MySQL Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fas fa-database text-4xl text-purple-400 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">MySQL Database</h4>
                        <p class="text-gray-400 text-sm mb-2">Administrator</p>
                        <p class="text-purple-400 text-xs">Valid until 2025</p>
                        <div class="mt-3">
                            <span class="bg-purple-600 text-xs px-3 py-1 rounded-full">Database</span>
                        </div>
                    </div>

                    <!-- Node.js Certification -->
                    <div class="bg-gray-800 p-6 rounded-xl text-center hover-glow scale-in group">
                        <div class="mb-4">
                            <i class="fab fa-node-js text-4xl text-green-500 group-hover:scale-110 transition-transform"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Node.js Developer</h4>
                        <p class="text-gray-400 text-sm mb-2">Professional Level</p>
                        <p class="text-green-400 text-xs">Valid until 2024</p>
                        <div class="mt-3">
                            <span class="bg-green-600 text-xs px-3 py-1 rounded-full">Backend</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Achievements -->
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-center mb-12 text-purple-400 fade-in">Achievements & Awards</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Achievement 1 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-yellow-500 to-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-trophy text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Best Student Project</h4>
                        <p class="text-gray-400 text-sm">UC Berkeley - 2020</p>
                        <p class="text-gray-300 text-sm mt-2">AI-powered Learning Management System</p>
                    </div>

                    <!-- Achievement 2 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-purple-500 to-indigo-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-medal text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Hackathon Winner</h4>
                        <p class="text-gray-400 text-sm">TechCrunch Disrupt - 2021</p>
                        <p class="text-gray-300 text-sm mt-2">Real-time Collaboration Platform</p>
                    </div>

                    <!-- Achievement 3 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-green-500 to-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-code text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Open Source Contributor</h4>
                        <p class="text-gray-400 text-sm">GitHub - 2022-Present</p>
                        <p class="text-gray-300 text-sm mt-2">500+ commits, 15 major projects</p>
                    </div>

                    <!-- Achievement 4 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-red-500 to-pink-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Top Performer</h4>
                        <p class="text-gray-400 text-sm">Google Summer of Code - 2022</p>
                        <p class="text-gray-300 text-sm mt-2">Contributed to React Native framework</p>
                    </div>

                    <!-- Achievement 5 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Tech Community Lead</h4>
                        <p class="text-gray-400 text-sm">Local Dev Meetup - 2023</p>
                        <p class="text-gray-300 text-sm mt-2">Organized 12+ events, 500+ members</p>
                    </div>

                    <!-- Achievement 6 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-lightbulb text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Innovation Award</h4>
                        <p class="text-gray-400 text-sm">Stanford Innovation Lab - 2021</p>
                        <p class="text-gray-300 text-sm mt-2">Machine Learning Trading Bot</p>
                    </div>

                    <!-- Achievement 7 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Dean's List</h4>
                        <p class="text-gray-400 text-sm">UC Berkeley - 2018-2020</p>
                        <p class="text-gray-300 text-sm mt-2">Consecutive 6 semesters</p>
                    </div>

                    <!-- Achievement 8 -->
                    <div class="text-center scale-in">
                        <div class="bg-gradient-to-r from-teal-500 to-green-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-white text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Volunteer Mentor</h4>
                        <p class="text-gray-400 text-sm">Code for Good - 2022-Present</p>
                        <p class="text-gray-300 text-sm mt-2">Mentored 25+ junior developers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text fade-in">Featured Projects</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden hover-glow scale-in relative group">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop" 
                         alt="E-commerce Platform" class="w-full h-48 object-cover">
                    <div class="project-overlay absolute inset-0 bg-gradient-to-t from-purple-600 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-bold mb-2">E-commerce Platform</h3>
                            <p class="text-sm text-gray-200">Modern shopping experience with React & Node.js</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-purple-400 transition-colors">E-commerce Platform</h3>
                        <p class="text-gray-400 mb-4">A full-stack e-commerce solution built with modern technologies, featuring real-time inventory management and seamless payment integration.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-purple-600 text-xs px-3 py-1 rounded-full">React</span>
                            <span class="bg-blue-600 text-xs px-3 py-1 rounded-full">Node.js</span>
                            <span class="bg-green-600 text-xs px-3 py-1 rounded-full">MongoDB</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors">Live Demo</a>
                            <a href="#" class="text-gray-400 hover:text-gray-300 transition-colors">GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden hover-glow scale-in relative group">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop" 
                         alt="Data Visualization Dashboard" class="w-full h-48 object-cover">
                    <div class="project-overlay absolute inset-0 bg-gradient-to-t from-indigo-600 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Analytics Dashboard</h3>
                            <p class="text-sm text-gray-200">Interactive data visualization with D3.js</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-purple-400 transition-colors">Analytics Dashboard</h3>
                        <p class="text-gray-400 mb-4">An interactive dashboard that transforms complex data into beautiful, actionable insights with real-time updates and customizable charts.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-orange-600 text-xs px-3 py-1 rounded-full">D3.js</span>
                            <span class="bg-yellow-600 text-xs px-3 py-1 rounded-full">JavaScript</span>
                            <span class="bg-red-600 text-xs px-3 py-1 rounded-full">Python</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors">Live Demo</a>
                            <a href="#" class="text-gray-400 hover:text-gray-300 transition-colors">GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card bg-gray-800 rounded-xl overflow-hidden hover-glow scale-in relative group">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=300&fit=crop" 
                         alt="Mobile App Design" class="w-full h-48 object-cover">
                    <div class="project-overlay absolute inset-0 bg-gradient-to-t from-pink-600 to-transparent flex items-end p-6">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Fitness App</h3>
                            <p class="text-sm text-gray-200">Cross-platform mobile app with React Native</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-purple-400 transition-colors">Fitness Tracking App</h3>
                        <p class="text-gray-400 mb-4">A comprehensive fitness app that helps users track workouts, monitor progress, and achieve their health goals with personalized recommendations.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-blue-600 text-xs px-3 py-1 rounded-full">React Native</span>
                            <span class="bg-purple-600 text-xs px-3 py-1 rounded-full">Expo</span>
                            <span class="bg-green-600 text-xs px-3 py-1 rounded-full">Firebase</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors">Live Demo</a>
                            <a href="#" class="text-gray-400 hover:text-gray-300 transition-colors">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text fade-in">Skills & Expertise</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Frontend Skills -->
                <div class="text-center">
                    <h3 class="text-xl font-bold mb-6 text-purple-400">Frontend</h3>
                    <div class="space-y-6">
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-react text-blue-400"></i></div>
                            <h4 class="font-semibold text-lg">React</h4>
                            <p class="text-gray-400 text-sm mt-2">Modern UI Development</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-css3-alt text-cyan-400"></i></div>
                            <h4 class="font-semibold text-lg">Tailwind CSS</h4>
                            <p class="text-gray-400 text-sm mt-2">Utility-First CSS</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-js-square text-yellow-400"></i></div>
                            <h4 class="font-semibold text-lg">JavaScript</h4>
                            <p class="text-gray-400 text-sm mt-2">ES6+ & TypeScript</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-css3-alt text-blue-500"></i></div>
                            <h4 class="font-semibold text-lg">CSS3</h4>
                            <p class="text-gray-400 text-sm mt-2">Advanced Styling</p>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="text-center">
                    <h3 class="text-xl font-bold mb-6 text-green-400">Backend</h3>
                    <div class="space-y-6">
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-php text-purple-500"></i></div>
                            <h4 class="font-semibold text-lg">PHP</h4>
                            <p class="text-gray-400 text-sm mt-2">Server-Side Scripting</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-laravel text-red-500"></i></div>
                            <h4 class="font-semibold text-lg">Laravel</h4>
                            <p class="text-gray-400 text-sm mt-2">PHP Framework</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-node-js text-green-500"></i></div>
                            <h4 class="font-semibold text-lg">Node.js</h4>
                            <p class="text-gray-400 text-sm mt-2">Server Development</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-python text-blue-400"></i></div>
                            <h4 class="font-semibold text-lg">Python</h4>
                            <p class="text-gray-400 text-sm mt-2">Django & FastAPI</p>
                        </div>
                    </div>
                </div>

                <!-- Programming & Database -->
                <div class="text-center">
                    <h3 class="text-xl font-bold mb-6 text-blue-400">Programming & Database</h3>
                    <div class="space-y-6">
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fas fa-code text-orange-500"></i></div>
                            <h4 class="font-semibold text-lg">OOP</h4>
                            <p class="text-gray-400 text-sm mt-2">Object-Oriented Programming</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fas fa-database text-blue-600"></i></div>
                            <h4 class="font-semibold text-lg">MySQL</h4>
                            <p class="text-gray-400 text-sm mt-2">Relational Database</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fas fa-leaf text-green-500"></i></div>
                            <h4 class="font-semibold text-lg">MongoDB</h4>
                            <p class="text-gray-400 text-sm mt-2">NoSQL Database</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-react text-cyan-400"></i></div>
                            <h4 class="font-semibold text-lg">React Native</h4>
                            <p class="text-gray-400 text-sm mt-2">Cross-Platform Apps</p>
                        </div>
                    </div>
                </div>

                <!-- Tools & Design -->
                <div class="text-center">
                    <h3 class="text-xl font-bold mb-6 text-yellow-400">Tools & Design</h3>
                    <div class="space-y-6">
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-figma text-purple-400"></i></div>
                            <h4 class="font-semibold text-lg">Figma</h4>
                            <p class="text-gray-400 text-sm mt-2">UI/UX Design</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-aws text-orange-400"></i></div>
                            <h4 class="font-semibold text-lg">AWS</h4>
                            <p class="text-gray-400 text-sm mt-2">Cloud Services</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-docker text-blue-500"></i></div>
                            <h4 class="font-semibold text-lg">DevOps</h4>
                            <p class="text-gray-400 text-sm mt-2">Docker & CI/CD</p>
                        </div>
                        <div class="scale-in bg-gray-700 p-6 rounded-xl hover-glow group">
                            <div class="text-4xl mb-4 group-hover:scale-110 transition-transform"><i class="fab fa-git-alt text-red-500"></i></div>
                            <h4 class="font-semibold text-lg">Git</h4>
                            <p class="text-gray-400 text-sm mt-2">Version Control</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text fade-in">Latest Blog Posts</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="bg-gray-800 rounded-xl overflow-hidden hover-glow scale-in group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=250&fit=crop" 
                             alt="Modern JavaScript Features" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-purple-600 text-xs px-3 py-1 rounded-full text-white">Development</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-400 mb-3">
                            <i class="far fa-calendar mr-2"></i>
                            <span>March 15, 2024</span>
                            <i class="far fa-clock ml-4 mr-2"></i>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-purple-400 transition-colors">Modern JavaScript Features You Should Know</h3>
                        <p class="text-gray-400 mb-4">Explore the latest ES2024 features that are revolutionizing how we write JavaScript. From optional chaining to private methods...</p>
                        <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors font-semibold">
                            Read More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="bg-gray-800 rounded-xl overflow-hidden hover-glow scale-in group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=400&h=250&fit=crop" 
                             alt="UI/UX Design Trends" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-pink-600 text-xs px-3 py-1 rounded-full text-white">Design</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-400 mb-3">
                            <i class="far fa-calendar mr-2"></i>
                            <span>March 10, 2024</span>
                            <i class="far fa-clock ml-4 mr-2"></i>
                            <span>7 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-purple-400 transition-colors">UI/UX Design Trends for 2024</h3>
                        <p class="text-gray-400 mb-4">Discover the design trends that are shaping user experiences in 2024. From glassmorphism to micro-interactions...</p>
                        <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors font-semibold">
                            Read More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="bg-gray-800 rounded-xl overflow-hidden hover-glow scale-in group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&h=250&fit=crop" 
                             alt="Laravel Best Practices" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="bg-red-600 text-xs px-3 py-1 rounded-full text-white">Backend</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-400 mb-3">
                            <i class="far fa-calendar mr-2"></i>
                            <span>March 5, 2024</span>
                            <i class="far fa-clock ml-4 mr-2"></i>
                            <span>10 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-purple-400 transition-colors">Laravel Best Practices for Scalable Applications</h3>
                        <p class="text-gray-400 mb-4">Learn essential Laravel patterns and practices that will help you build maintainable and scalable web applications...</p>
                        <a href="#" class="text-purple-400 hover:text-purple-300 transition-colors font-semibold">
                            Read More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </article>
            </div>
            
            <div class="text-center mt-12 fade-in">
                <a href="#" class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover-glow magnetic-button inline-block">
                    View All Posts
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-800">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text fade-in">What Clients Say</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-700 p-8 rounded-xl hover-glow scale-in relative">
                    <div class="absolute -top-4 left-8">
                        <div class="bg-purple-600 rounded-full p-2">
                            <i class="fas fa-quote-left text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="text-gray-300 mb-6 italic">"Alex delivered an outstanding e-commerce platform that exceeded our expectations. The attention to detail and user experience is phenomenal. Our sales increased by 40% within the first month!"</p>
                        <div class="flex items-center">
                            <img src="1.jpg" 
                                 alt="Sarah Johnson" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-white">Sarah Johnson</h4>
                                <p class="text-gray-400 text-sm">CEO, TechStart Inc.</p>
                                <div class="flex mt-1">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-700 p-8 rounded-xl hover-glow scale-in relative">
                    <div class="absolute -top-4 left-8">
                        <div class="bg-indigo-600 rounded-full p-2">
                            <i class="fas fa-quote-left text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="text-gray-300 mb-6 italic">"Working with Alex was a game-changer for our startup. The mobile app he developed is not only beautiful but also incredibly functional. Highly recommended for any serious project."</p>
                        <div class="flex items-center">
                            <img src="1.jpg" 
                                 alt="Michael Chen" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-white">Michael Chen</h4>
                                <p class="text-gray-400 text-sm">Founder, InnovateLab</p>
                                <div class="flex mt-1">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-700 p-8 rounded-xl hover-glow scale-in relative">
                    <div class="absolute -top-4 left-8">
                        <div class="bg-pink-600 rounded-full p-2">
                            <i class="fas fa-quote-left text-white text-xl"></i>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="text-gray-300 mb-6 italic">"Alex's expertise in Laravel and React helped us build a robust analytics dashboard. The code quality is exceptional, and the project was delivered on time. A true professional!"</p>
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" 
                                 alt="Emily Rodriguez" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-white">Emily Rodriguez</h4>
                                <p class="text-gray-400 text-sm">CTO, DataFlow Solutions</p>
                                <div class="flex mt-1">
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                    <i class="fas fa-star text-yellow-400 text-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 gradient-text fade-in">Let's Work Together</h2>
            <p class="text-xl text-gray-300 mb-12 fade-in">
                Have an exciting project in mind? I'd love to hear about it and discuss how we can bring your vision to life.
            </p>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="scale-in bg-gray-800 p-6 rounded-xl hover-glow">
                    <div class="text-4xl mb-4">📧</div>
                    <h3 class="text-xl font-semibold mb-2">Email</h3>
                    <p class="text-gray-400">hello@alexjohnson.dev</p>
                </div>
                <div class="scale-in bg-gray-800 p-6 rounded-xl hover-glow">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="text-xl font-semibold mb-2">Phone</h3>
                    <p class="text-gray-400">+1 (555) 123-4567</p>
                </div>
                <div class="scale-in bg-gray-800 p-6 rounded-xl hover-glow">
                    <div class="text-4xl mb-4">📍</div>
                    <h3 class="text-xl font-semibold mb-2">Location</h3>
                    <p class="text-gray-400">San Francisco, CA</p>
                </div>
            </div>
            
            <div class="space-x-4 fade-in">
                <a href="mailto:hello@alexjohnson.dev" class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover-glow magnetic-button inline-block">
                    Send Message
                </a>
                <a href="#" class="border-2 border-purple-500 text-purple-400 px-8 py-3 rounded-full font-semibold hover:bg-purple-500 hover:text-white transition-all duration-300 magnetic-button inline-block">
                    Download Resume
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-8 border-t border-gray-700">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-2xl font-bold gradient-text mb-4 md:mb-0">Alex Johnson</div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">LinkedIn</a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">GitHub</a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Twitter</a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors">Dribbble</a>
                </div>
            </div>
            <div class="text-center text-gray-400 mt-8">
                <p>&copy; 2025 Alex Johnson. All rights reserved. Made with ❤️ and lots of coffee.</p>
            </div>
        </div>
    </footer>

   