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

$booking = null;
$bookingId = trim($_GET['booking_id'] ?? '');

if ($bookingId !== '') {
    try {
        require __DIR__ . '/includes/database.php';
        $statement = databaseConnection()->prepare('SELECT * FROM bookings WHERE booking_id = ?');
        $statement->execute([$bookingId]);
        $booking = $statement->fetch() ?: null;
    } catch (Throwable $exception) {
        error_log($exception->getMessage());
    }
}

require __DIR__ . '/includes/header.php';
?>

<main class="container">
    <div class="confirm-box">
        <?php if ($booking): ?>
            <h2 class="text-success mb-4">Booking Confirmed!</h2>
            <h4>Passenger: <span class="text-primary"><?php echo e($booking['passenger_name']); ?></span></h4>
            <p><strong>Route:</strong> <?php echo e($booking['departure_city']); ?> to <?php echo e($booking['destination_city']); ?></p>
            <p><strong>Departure Date:</strong> <?php echo e($booking['departure_date']); ?></p>
            <p>Your Maharshi Airline flight has been booked successfully.</p>
            <p><strong>Booking ID:</strong> <?php echo e($booking['booking_id']); ?></p>
        <?php else: ?>
            <h2 class="text-warning mb-4">Booking Details Missing</h2>
            <p>Please complete the booking form before opening the confirmation page.</p>
        <?php endif; ?>

        <a href="Book.php" class="btn btn-primary">Book Another Flight</a>
    </div>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
