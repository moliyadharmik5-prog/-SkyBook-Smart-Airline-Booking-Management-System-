<?php
$pageTitle = 'Contact Us - Maharshi Airline';
$activePage = 'contact';
$offices = [
    [
        'title' => 'Registered Office',
        'address' => '123 Aviation Road, Main City, State, Country',
        'phone' => '+1 (555) 123-4567',
        'email' => 'registeredoffice@maharshiairline.com',
    ],
    [
        'title' => 'Corporate Office',
        'address' => '456 Skyline Avenue, Business District, State, Country',
        'phone' => '+1 (555) 765-4321',
        'email' => 'corporate@maharshiairline.com',
    ],
    [
        'title' => 'Customer Support',
        'address' => '',
        'phone' => '+1 (555) 987-6543 (Available 24/7)',
        'email' => 'support@maharshiairline.com',
    ],
];

require __DIR__ . '/includes/header.php';
?>

<main class="container my-5">
    <h2 class="text-primary mb-4">Contact Us</h2>

    <?php foreach ($offices as $office): ?>
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><?php echo e($office['title']); ?></h4>
            </div>
            <div class="card-body">
                <?php if ($office['address'] !== ''): ?>
                    <p><strong>Address:</strong> <?php echo e($office['address']); ?></p>
                <?php endif; ?>
                <p><strong>Phone:</strong> <?php echo e($office['phone']); ?></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo e($office['email']); ?>"><?php echo e($office['email']); ?></a></p>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
