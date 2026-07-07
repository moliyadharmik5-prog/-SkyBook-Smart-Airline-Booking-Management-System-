<?php
$pageTitle = 'Our Services - Maharshi Airline';
$activePage = 'services';
$services = [
    ['title' => 'In-flight Services', 'description' => 'Enjoy a premium in-flight experience with gourmet meals, comfortable seating, and entertainment options for all ages.'],
    ['title' => 'Baggage Services', 'description' => 'We offer flexible baggage allowances and easy check-in options to make your travel hassle-free.'],
    ['title' => 'Premium Seating', 'description' => 'Upgrade to our premium seating options for extra comfort, privacy, and exclusive amenities.'],
    ['title' => 'Loyalty Program', 'description' => 'Join our frequent flyer program to earn rewards, enjoy special perks, and access exclusive member benefits.'],
    ['title' => 'In-flight Entertainment', 'description' => 'Stay entertained with our selection of movies, music, games, and TV shows, available on all long-haul flights.'],
    ['title' => 'Special Assistance', 'description' => 'Our dedicated team is here to provide assistance for passengers with special needs and mobility requirements.'],
];

require __DIR__ . '/includes/header.php';
?>

<main class="container my-5">
    <h2 class="text-primary mb-4">Our Services</h2>
    <p>We offer a range of services designed to make your journey comfortable, enjoyable, and seamless. Discover what we have to offer below:</p>

    <div class="row">
        <?php foreach ($services as $service): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($service['title']); ?></h5>
                        <p class="card-text"><?php echo e($service['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
