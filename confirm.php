<?php
$pageTitle = 'Booking Confirmation - Maharshi Airline';
$activePage = 'booking';
$extraStyles = '
body {
    background: #f4f6f9;
}
.confirm-box {
    max-width: 650px;
    margin: 80px auto;
    background: white;
    padding: 40px;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
';

$passengerName = trim($_POST['name'] ?? '');
$from = trim($_POST['from'] ?? '');
$to = trim($_POST['to'] ?? '');
$departureDate = trim($_POST['departure_date'] ?? '');
$hasBookingDetails = $_SERVER['REQUEST_METHOD'] === 'POST' && $passengerName !== '' && $from !== '' && $to !== '' && $departureDate !== '';
$bookingId = 'AIR' . date('Y') . random_int(1000, 9999);

require __DIR__ . '/includes/header.php';
?>

<main class="container">
    <div class="confirm-box">
        <?php if ($hasBookingDetails): ?>
            <h2 class="text-success mb-4">Booking Confirmed!</h2>
            <h4>Passenger: <span class="text-primary"><?php echo e($passengerName); ?></span></h4>
            <p><strong>Route:</strong> <?php echo e($from); ?> to <?php echo e($to); ?></p>
            <p><strong>Departure Date:</strong> <?php echo e($departureDate); ?></p>
            <p>Your flight ticket has been booked successfully.</p>
            <p><strong>Booking ID:</strong> <?php echo e($bookingId); ?></p>
        <?php else: ?>
            <h2 class="text-warning mb-4">Booking Details Missing</h2>
            <p>Please complete the booking form before opening the confirmation page.</p>
        <?php endif; ?>

        <a href="Book.php" class="btn btn-primary">Book Another Flight</a>
    </div>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
