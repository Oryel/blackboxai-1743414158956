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
    ]
];

// Force error if requested
if (isset($_GET['force_error']) && $_GET['force_error'] == '1') {
    http_response_code(500);
    echo json_encode(['error' => 'Simulated API error']);
    exit;
}

// Random 10% chance of error
if (rand(1, 10) === 1) {
    http_response_code(500);
    echo json_encode(['error' => 'Random API error']);
    exit;
}

// Network delay simulation
usleep(rand(100000, 300000));
echo json_encode($mockData);