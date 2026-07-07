<?php
$pageTitle = 'Maharshi Airline';
$activePage = 'home';

$services = [
    ['title' => 'In-flight Services', 'description' => 'Enjoy gourmet meals, comfortable seating, and endless entertainment options.'],
    ['title' => 'Premium Seating', 'description' => 'Upgrade to extra comfort and exclusive amenities for a luxurious journey.'],
    ['title' => 'Loyalty Program', 'description' => 'Earn rewards and enjoy exclusive perks with our frequent flyer program.'],
];

$destinations = [
    [
        'name' => 'Paris, France',
        'image' => 'https://www.royalcaribbean.com/media-assets/pmc/content/dam/shore-x/paris-le-havre-leh/lh17-paris-sightseeing-without-lunch/stock-photo-skyline-of-paris-with-eiffel-tower-at-sunset-in-paris-france-eiffel-tower-is-one-of-the-most-752725282.jpg?w=1920',
    ],
    [
        'name' => 'Tokyo, Japan',
        'image' => 'https://pixelz.cc/wp-content/uploads/2017/01/view-of-mout-fuji-from-red-pagoda-tkyo-japan-uhd-4k-wallpaper.jpg',
    ],
    [
        'name' => 'New York, USA',
        'image' => 'https://www.wallpaperflare.com/static/953/630/549/new-york-usa-skyscrapers-top-view-wallpaper.jpg',
    ],
    [
        'name' => 'Sydney, Australia',
        'image' => 'https://th.bing.com/th/id/OIP._UpXFoBCUXV3m1_4qIDLrgHaE6?rs=1&pid=ImgDetMain',
    ],
];

require __DIR__ . '/includes/header.php';
?>

<header class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Fly with Maharshi Airline</h1>
        <p class="lead">Connecting you to over 100 destinations worldwide.</p>
        <a href="Book.php" class="btn btn-light btn-lg">Book Flight</a>
    </div>
</header>

<section class="container my-5">
    <h2 class="text-center text-primary mb-4">Our Services</h2>
    <div class="row">
        <?php foreach ($services as $service): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($service['title']); ?></h5>
                        <p class="card-text"><?php echo e($service['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="container my-5">
    <h2 class="text-center text-primary mb-4">Explore Our 100+ Destinations</h2>
    <div class="row">
        <?php foreach ($destinations as $destination): ?>
            <div class="col-md-3 mb-3">
                <img src="<?php echo e($destination['image']); ?>" class="img-fluid rounded" alt="<?php echo e($destination['name']); ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
