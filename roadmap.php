<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roadmap Detail | Roadmap.sh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .step-content {
            display: none;
        }
        .step-content.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <?php include 'header.php'; ?>
    
    <!-- Roadmap Header -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-6">
                <a href="index.php" class="text-blue-500 hover:text-blue-700 flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Roadmaps
                </a>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-2/3">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full mr-3">
                            Beginner
                        </span>
                        <span class="text-gray-500">Last updated: <?php echo date('F j, Y'); ?></span>
                    </div>
                    <h1 class="text-3xl font-bold mb-4">Frontend Developer Roadmap</h1>
                    <p class="text-gray-600 mb-6">Step by step guide to becoming a modern frontend developer in 2024</p>
                    
                    <div class="flex space-x-4 mb-8">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            <i class="fas fa-share-alt mr-2"></i> Share
                        </button>
                        <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-100">
                            <i class="far fa-bookmark mr-2"></i> Save
                        </button>
                    </div>
                </div>
                
                <div class="md:w-1/3">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="font-semibold mb-4">Resources</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="text-blue-600 hover:underline flex items-center">
                                    <i class="fas fa-external-link-alt mr-2"></i> Official Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-600 hover:underline flex items-center">
                                    <i class="fab fa-youtube mr-2"></i> Video Tutorials
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-600 hover:underline flex items-center">
                                    <i class="fas fa-book mr-2"></i> Recommended Books
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Steps Navigation -->
                <div class="md:w-1/4">
                    <div class="sticky top-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h3 class="font-semibold mb-4">Steps</h3>
                            <ul class="space-y-2">
                                <li>
                                    <a href="#step1" class="block px-3 py-2 rounded hover:bg-gray-100 text-blue-600 font-medium">
                                        1. Learn HTML & CSS
                                    </a>
                                </li>
                                <li>
                                    <a href="#step2" class="block px-3 py-2 rounded hover:bg-gray-100 text-gray-700">
                                        2. Learn JavaScript
                                    </a>
                                </li>
                                <li>
                                    <a href="#step3" class="block px-3 py-2 rounded hover:bg-gray-100 text-gray-700">
                                        3. Learn Version Control (Git)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Steps Content -->
                <div class="md:w-3/4">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div id="step1" class="step-content active">
                            <h2 class="text-2xl font-bold mb-4">1. Learn HTML & CSS</h2>
                            <p class="text-gray-600 mb-6">HTML (HyperText Markup Language) and CSS (Cascading Style Sheets) are the building blocks of the web.</p>
                            
                            <h3 class="font-semibold mb-3">Key Concepts:</h3>
                            <ul class="list-disc pl-5 mb-6 space-y-2">
                                <li>HTML document structure</li>
                                <li>Semantic HTML elements</li>
                                <li>CSS selectors and specificity</li>
                                <li>Box model and layout</li>
                                <li>Responsive design principles</li>
                            </ul>
                            
                            <h3 class="font-semibold mb-3">Resources:</h3>
                            <div class="space-y-3">
                                <div class="p-3 border border-gray-200 rounded-lg hover:bg-gray-50">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">MDN Web Docs - HTML</a>
                                    <p class="text-sm text-gray-500 mt-1">Comprehensive reference for HTML elements and attributes</p>
                                </div>
                                <div class="p-3 border border-gray-200 rounded-lg hover:bg-gray-50">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">CSS Tricks</a>
                                    <p class="text-sm text-gray-500 mt-1">Great articles and guides on modern CSS techniques</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="js/main.js"></script>
    <script>
        // Simple step navigation functionality
        document.querySelectorAll('[href^="#step"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.step-content').forEach(content => {
                    content.classList.remove('active');
                });
                document.querySelector(this.getAttribute('href')).classList.add('active');
                
                // Update active state in nav
                document.querySelectorAll('[href^="#step"]').forEach(navLink => {
                    navLink.classList.remove('text-blue-600', 'font-medium');
                    navLink.classList.add('text-gray-700');
                });
                this.classList.add('text-blue-600', 'font-medium');
                this.classList.remove('text-gray-700');
            });
        });
    </script>
</body>
</html>