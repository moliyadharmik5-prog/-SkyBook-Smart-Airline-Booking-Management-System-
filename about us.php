<?php
$pageTitle = 'About Us - Maharshi Airline';
$activePage = 'about';
$values = [
    'Customer Satisfaction' => 'We put our customers at the heart of everything we do.',
    'Safety First' => 'We prioritize the safety of our passengers, crew, and partners.',
    'Innovation' => 'We embrace new technologies and ideas to improve our services.',
    'Environmental Responsibility' => 'We are committed to sustainable practices to protect our planet.',
];
$testimonials = [
    ['quote' => 'Maharshi Airline made my journey so comfortable and stress-free. Their customer service is top-notch!', 'author' => 'Sarah W.'],
    ['quote' => 'I always choose Maharshi Airline for my business trips. Their punctuality and professionalism are unmatched.', 'author' => 'David M.'],
    ['quote' => 'A truly reliable airline with amazing service. Highly recommended!', 'author' => 'Emily R.'],
];

require __DIR__ . '/includes/header.php';
?>

<main class="container my-5">
    <h2 class="text-primary mb-4">About Maharshi Airline</h2>

    <section class="mb-5">
        <h3>Our History</h3>
        <p>Founded in 2000, Maharshi Airline started with a single route and a mission to make air travel affordable and accessible. Over the years, we have grown into an international airline serving over 100 destinations across six continents.</p>
    </section>

    <section class="mb-5">
        <h3>Our Mission</h3>
        <p>At Maharshi Airline, our mission is to provide a safe, comfortable, and exceptional travel experience. Whether you are traveling for business or pleasure, we aim to make every journey memorable.</p>

        <h4>Our Values</h4>
        <ul>
            <?php foreach ($values as $title => $description): ?>
                <li><strong><?php echo e($title); ?>:</strong> <?php echo e($description); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="mb-5">
        <h3>Meet Our Team</h3>
        <p>Our team is made up of over 10,000 dedicated professionals who work to ensure a safe, comfortable, and enjoyable journey for every passenger.</p>
    </section>

    <section class="mb-5">
        <h3>What Our Passengers Say</h3>
        <div class="row">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>"<?php echo e($testimonial['quote']); ?>"</p>
                                <footer class="blockquote-footer"><?php echo e($testimonial['author']); ?></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
