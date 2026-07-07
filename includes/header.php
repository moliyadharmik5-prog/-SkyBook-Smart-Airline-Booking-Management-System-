<?php
if (!function_exists('e')) {
    function e($value) {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

$siteName = $siteName ?? 'Maharshi Airline';
$pageTitle = $pageTitle ?? $siteName;
$activePage = $activePage ?? '';
$extraStyles = $extraStyles ?? '';
$navigation = [
    'home' => ['label' => 'Home', 'url' => 'home.php'],
    'about' => ['label' => 'About', 'url' => 'about us.php'],
    'services' => ['label' => 'Services', 'url' => 'service.php'],
    'destinations' => ['label' => 'Destinations', 'url' => 'Destination.php'],
    'booking' => ['label' => 'Book', 'url' => 'Book.php'],
    'contact' => ['label' => 'Contact', 'url' => 'contact us.php'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php if ($extraStyles !== ''): ?>
        <style><?php echo $extraStyles; ?></style>
    <?php endif; ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="home.php">
                <img src="https://static.vecteezy.com/system/resources/previews/000/619/645/original/aircraft-airplane-airline-logo-label-journey-air-travel-airliner-symbol-vector-illustration.jpg" alt="Airline logo" height="48">
                <span><?php echo e($siteName); ?></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($navigation as $key => $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $activePage === $key ? 'active' : ''; ?>" href="<?php echo e($item['url']); ?>">
                                <?php echo e($item['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
