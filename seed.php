<?php
require 'config.php';

$initialData = [
    [
        'title' => 'Frontend Developer',
        'description' => 'Step by step guide to becoming a modern frontend developer',
        'image' => 'https://images.pexels.com/photos/11035371/pexels-photo-11035371.jpeg',
        'steps' => [
            'Learn HTML & CSS',
            'Learn JavaScript',
            'Learn Version Control (Git)',
            'Learn Package Managers (npm, yarn)',
            'Learn CSS Preprocessors (Sass)'
        ],
        'difficulty' => 'Beginner',
        'tags' => ['web', 'frontend', 'javascript']
    ],
    [
        'title' => 'Backend Developer',
        'description' => 'Step by step guide to becoming a backend developer',
        'image' => 'https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg',
        'steps' => [
            'Learn a Programming Language (Python, Java, etc)',
            'Learn Databases (SQL & NoSQL)',
            'Learn API Design (REST, GraphQL)',
            'Learn Authentication (JWT, OAuth)',
            'Learn Caching Strategies'
        ],
        'difficulty' => 'Intermediate',
        'tags' => ['backend', 'server', 'database']
    ],
    [
        'title' => 'DevOps Engineer',
        'description' => 'Step by step guide to becoming a DevOps engineer',
        'image' => 'https://images.pexels.com/photos/1181290/pexels-photo-1181290.jpeg',
        'steps' => [
            'Learn Linux Fundamentals',
            'Learn Networking Basics',
            'Learn CI/CD Pipelines',
            'Learn Infrastructure as Code',
            'Learn Monitoring & Logging'
        ],
        'difficulty' => 'Advanced',
        'tags' => ['devops', 'cloud', 'automation']
    ]
];

try {
    // Clear existing data
    $roadmaps->deleteMany([]);
    
    // Insert new data
    $result = $roadmaps->insertMany($initialData);
    echo "Successfully inserted " . $result->getInsertedCount() . " roadmaps.\n";
} catch (Exception $e) {
    echo "Error seeding data: " . $e->getMessage() . "\n";
}