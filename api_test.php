<?php
header('Content-Type: application/json');

$mockData = [
    [
        'id' => 1,
        'title' => 'Frontend Developer',
        'description' => 'Learn modern frontend development',
        'image' => 'https://images.pexels.com/photos/11035371/pexels-photo-11035371.jpeg',
        'difficulty' => 'Beginner',
        'tags' => ['web', 'frontend', 'javascript'],
        'steps' => ['HTML/CSS', 'JavaScript', 'React']
    ],
    [
        'id' => 2,
        'title' => 'Backend Developer', 
        'description' => 'Master server-side development',
        'image' => 'https://images.pexels.com/photos/1181677/pexels-photo-1181677.jpeg',
        'difficulty' => 'Intermediate',
        'tags' => ['server', 'database', 'api'],
        'steps' => ['Node.js/Python', 'Databases', 'API Design']
    ]
];

// Error simulation and network delay
if (rand(1, 10) === 1) {
    http_response_code(500);
    echo json_encode(['error' => 'Simulated API error']);
    exit;
}
usleep(rand(100000, 300000)); // 100-300ms delay
echo json_encode($mockData);
