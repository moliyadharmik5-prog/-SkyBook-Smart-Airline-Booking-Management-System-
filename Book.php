<?php
$pageTitle = 'Flight Booking - Maharshi Airline';
$activePage = 'booking';
$extraStyles = '
body {
    background: #f4f6f9;
}
.booking-box {
    max-width: 600px;
    margin: 50px auto;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
';

require __DIR__ . '/includes/header.php';
?>

<main class="container">
    <div class="booking-box">
        <h2 class="text-center text-primary mb-4">Book a Maharshi Airline Flight</h2>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php if ($_GET['error'] === 'database'): ?>
                    Booking could not be saved. Please check the database connection and try again.
                <?php elseif ($_GET['error'] === 'same-city'): ?>
                    Departure and destination cities must be different.
                <?php else: ?>
                    Please enter valid details in every field.
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <form action="process_booking.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="name">Passenger Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="from">From</label>
                <input type="text" class="form-control" id="from" name="from" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="to">To</label>
                <input type="text" class="form-control" id="to" name="to" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="departure_date">Departure Date</label>
                <input type="date" class="form-control" id="departure_date" name="departure_date" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Book Flight</button>
        </form>
    </div>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
