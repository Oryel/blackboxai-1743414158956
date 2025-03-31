<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roadmap Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <?php include 'header.php'; ?>
    
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-6">Your Learning Roadmap Starts Here</h1>
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" placeholder="Search roadmaps..." 
                           class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="absolute right-3 top-3 text-gray-400">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Grid -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <!-- Roadmap cards will be dynamically inserted here -->
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-code text-4xl text-gray-400"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Frontend Developer</h3>
                            <p class="text-gray-600 mb-4">Step by step guide to becoming a modern frontend developer</p>
                            <a href="#" class="text-blue-500 font-medium hover:text-blue-700">View Roadmap →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="js/container_test.js"></script>
</body>
</html>