<?php
$pageTitle = 'Our Destinations - Maharshi Airline';
$activePage = 'destinations';
$popularDestinations = [
    [
        'name' => 'Paris, France',
        'description' => 'Discover the City of Light, from the Eiffel Tower to the Seine River.',
        'image' => 'https://www.royalcaribbean.com/media-assets/pmc/content/dam/shore-x/paris-le-havre-leh/lh17-paris-sightseeing-without-lunch/stock-photo-skyline-of-paris-with-eiffel-tower-at-sunset-in-paris-france-eiffel-tower-is-one-of-the-most-752725282.jpg?w=1920',
    ],
    [
        'name' => 'Tokyo, Japan',
        'description' => 'Experience the perfect blend of tradition and modernity in Tokyo.',
        'image' => 'https://pixelz.cc/wp-content/uploads/2017/01/view-of-mout-fuji-from-red-pagoda-tkyo-japan-uhd-4k-wallpaper.jpg',
    ],
    [
        'name' => 'New York, USA',
        'description' => 'The city that never sleeps, offering endless attractions and entertainment.',
        'image' => 'https://www.wallpaperflare.com/static/953/630/549/new-york-usa-skyscrapers-top-view-wallpaper.jpg',
    ],
];
$allDestinations = ['London, UK', 'Rome, Italy', 'Sydney, Australia', 'Dubai, UAE', 'Cape Town, South Africa', 'Beijing, China'];

require __DIR__ . '/includes/header.php';
?>

<main class="container my-5">
    <h2 class="text-primary mb-4">Explore Our Destinations</h2>
    <p>Fly with us to over 100 destinations around the world. Whether you are looking for a weekend getaway, a business trip, or a family vacation, we have you covered.</p>

    <section class="mb-5">
        <h3>Popular Destinations</h3>
        <div class="row">
            <?php foreach ($popularDestinations as $destination): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo e($destination['image']); ?>" class="card-img-top" alt="<?php echo e($destination['name']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($destination['name']); ?></h5>
                            <p class="card-text"><?php echo e($destination['description']); ?></p>
                            <a href="Book.php" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section>
        <h3>All Destinations</h3>
        <div class="row">
            <?php foreach ($allDestinations as $destination): ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h6 class="card-title"><?php echo e($destination); ?></h6>
                            <a href="Book.php" class="btn btn-link">Book Flight</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
