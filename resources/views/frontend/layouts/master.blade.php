<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="{{ config('app.charset', 'UTF-8') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name', 'Creative Developer & Designer') }}</title>
    <meta name="description" content="Portfolio of Alex Johnson - Creative Developer, Designer, and Digital Artist specializing in web development and user experience design.">
    <meta name="keywords" content="web developer, designer, portfolio, creative, full-stack, UI/UX">
    <meta name="author" content="{{ 'Shahidul Islam' }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://alexjohnson.dev/">
    <meta property="og:title" content="Alex Johnson - Creative Developer & Designer">
    <meta property="og:description" content="Portfolio showcasing innovative web development and design projects">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://alexjohnson.dev/">
    <meta property="twitter:title" content="Alex Johnson - Creative Developer & Designer">
    <meta property="twitter:description" content="Portfolio showcasing innovative web development and design projects">
    
   <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/min.css') }}">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        .floating-delayed {
            animation: floating 6s ease-in-out infinite 2s;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease-out;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease-out;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease-out;
        }
        
        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }
        
        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(102, 126, 234, 0.4);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        
        .project-card:hover .project-overlay {
            opacity: 1;
        }
        
        .project-overlay {
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .skill-bar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            height: 6px;
            border-radius: 3px;
            transform-origin: left;
            transform: scaleX(0);
            transition: transform 1s ease-out;
        }
        
        .skill-bar.animate {
            transform: scaleX(1);
        }
        
        .navbar-glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            z-index: 9999;
            transition: width 0.1s ease;
        }
        
        .parallax {
            transform: translateZ(0);
            will-change: transform;
        }
        
        .magnetic-button {
            transition: transform 0.3s ease;
        }
        
        .magnetic-button:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 768px) {
            .floating, .floating-delayed {
                animation: none;
            }
        }
    </style> 
  
 
    </head>
<body class="bg-gray-900 text-white overflow-x-hidden">



    @include('frontend.partials.layouts.header')
<main id="main-content">
      @yield('content')
</main>
  

    @include('frontend.partials.layouts.footer')


   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
 <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Animate skill bars
                    if (entry.target.classList.contains('skill-item')) {
                        const skillBar = entry.target.querySelector('.skill-bar');
                        const width = skillBar.getAttribute('data-width');
                        skillBar.style.transform = `scaleX(${parseInt(width) / 100})`;
                    }
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in, .skill-item').forEach(el => {
            observer.observe(el);
        });

        // Scroll progress indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('scrollIndicator').style.width = scrolled + '%';
        });

        // Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax');
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Add parallax class to floating elements
        document.querySelectorAll('.floating, .floating-delayed').forEach(el => {
            el.classList.add('parallax');
            el.dataset.speed = Math.random() * 0.3 + 0.1;
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(17, 24, 39, 0.95)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.1)';
            }
        });

        // Magnetic button effect
        document.querySelectorAll('.magnetic-button').forEach(button => {
            button.addEventListener('mousemove', (e) => {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                button.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
            });
            
            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translate(0px, 0px) scale(1)';
            });
        });

        // Typing animation for hero text
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                }
            }
            typing();
        }

        // Initialize typing animation after page load
        window.addEventListener('load', () => {
            const heroTitle = document.querySelector('#home h1');
            const originalText = heroTitle.textContent;
            setTimeout(() => {
                typeWriter(heroTitle, originalText, 50);
            }, 1000);
        });

        // Cursor trail effect
        const coords = { x: 0, y: 0 };
        const circles = document.querySelectorAll(".circle");

        circles.forEach(function (circle, index) {
            circle.x = 0;
            circle.y = 0;
        });

        window.addEventListener("mousemove", function(e) {
            coords.x = e.clientX;
            coords.y = e.clientY;
        });

        function animateCircles() {
            let x = coords.x;
            let y = coords.y;
            
            circles.forEach(function (circle, index) {
                circle.style.left = x - 12 + "px";
                circle.style.top = y - 12 + "px";
                
                circle.style.scale = (circles.length - index) / circles.length;
                
                circle.x = x;
                circle.y = y;

                const nextCircle = circles[index + 1] || circles[0];
                x += (nextCircle.x - x) * 0.3;
                y += (nextCircle.y - y) * 0.3;
            });
            
            requestAnimationFrame(animateCircles);
        }

        // Add cursor circles to body
        for (let i = 0; i < 20; i++) {
            const circle = document.createElement('div');
            circle.className = 'circle';
            circle.style.cssText = `
                height: 24px;
                width: 24px;
                border-radius: 50%;
                background: linear-gradient(45deg, #667eea, #764ba2);
                position: fixed;
                top: 0;
                left: 0;
                pointer-events: none;
                z-index: 99999999;
                opacity: ${1 - (i * 0.05)};
                transform: scale(${1 - (i * 0.05)});
                mix-blend-mode: multiply;
            `;
            document.body.appendChild(circle);
            circles.push(circle);
        }

        animateCircles();

        // 3D card tilt effect
        document.querySelectorAll('.project-card, .hover-glow').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(20px)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
            });
        });

        // Smooth reveal animation on scroll
        const revealElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
        
        const revealOnScroll = () => {
            revealElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Check on page load

        // Preloader
        window.addEventListener('load', () => {
            const preloader = document.createElement('div');
            preloader.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 10000;
                transition: opacity 0.5s ease;
            `;
            
            const loader = document.createElement('div');
            loader.style.cssText = `
                width: 50px;
                height: 50px;
                border: 5px solid rgba(255, 255, 255, 0.3);
                border-top: 5px solid white;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            `;
            
            const style = document.createElement('style');
            style.textContent = `
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            `;
            document.head.appendChild(style);
            
            preloader.appendChild(loader);
            document.body.appendChild(preloader);
            
            setTimeout(() => {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(preloader);
                }, 500);
            }, 2000);
        });

        // Easter egg: Konami code
        const konamiCode = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'KeyB', 'KeyA'];
        let konamiIndex = 0;

        document.addEventListener('keydown', (e) => {
            if (e.code === konamiCode[konamiIndex]) {
                konamiIndex++;
                if (konamiIndex === konamiCode.length) {
                    // Trigger confetti effect
                    for (let i = 0; i < 100; i++) {
                        const confetti = document.createElement('div');
                        confetti.style.cssText = `
                            position: fixed;
                            width: 10px;
                            height: 10px;
                            background: ${['#667eea', '#764ba2', '#fbbf24', '#ef4444', '#10b981'][Math.floor(Math.random() * 5)]};
                            top: -10px;
                            left: ${Math.random() * 100}vw;
                            z-index: 10001;
                            border-radius: 50%;
                            animation: confetti-fall ${2 + Math.random() * 3}s linear forwards;
                        `;
                        
                        document.body.appendChild(confetti);
                        
                        setTimeout(() => {
                            document.body.removeChild(confetti);
                        }, 5000);
                    }
                    
                    const confettiStyle = document.createElement('style');
                    confettiStyle.textContent = `
                        @keyframes confetti-fall {
                            to {
                                transform: translateY(100vh) rotate(360deg);
                                opacity: 0;
                            }
                        }
                    `;
                    document.head.appendChild(confettiStyle);
                    
                    konamiIndex = 0;
                    alert('🎉 You found the easter egg! Thanks for exploring my portfolio!');
                }
            } else {
                konamiIndex = 0;
            }
        });

        // Performance optimization: Throttle scroll events
        let ticking = false;
        
        function updateScrollEffects() {
            // Update scroll progress
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('scrollIndicator').style.width = scrolled + '%';
            
            // Update navbar background
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(17, 24, 39, 0.95)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.1)';
            }
            
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateScrollEffects);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick);

        // Add structured data for SEO
        const structuredData = {
            "@@context": "https://schema.org",
            "@@type": "Person",
            "name": "Alex Johnson",
            "jobTitle": "Creative Developer & Digital Artist",
            "description": "Creative Developer and Digital Artist specializing in web development and user experience design",
            "url": "https://alexjohnson.dev",
            "sameAs": [
                "https://linkedin.com/in/alexjohnson",
                "https://github.com/alexjohnson",
                "https://twitter.com/alexjohnson"
            ],
            "knowsAbout": ["JavaScript", "React", "Node.js", "UI/UX Design", "Web Development"],
            "address": {
                "@@type": "PostalAddress",
                "addressLocality": "San Francisco",
                "addressRegion": "CA"
            }
        };

        const script = document.createElement('script');
        script.type = 'application/ld+json';
        script.text = JSON.stringify(structuredData);
        document.head.appendChild(script);

        console.log('🎨 Portfolio loaded successfully! Try the Konami code for a surprise...');
    </script>
</body>
</html>
