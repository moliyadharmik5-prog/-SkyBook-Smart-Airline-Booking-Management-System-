<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: Book.php');
    exit;
}

require __DIR__ . '/includes/database.php';

$passengerName = trim($_POST['name'] ?? '');
$from = trim($_POST['from'] ?? '');
$to = trim($_POST['to'] ?? '');
$departureDate = trim($_POST['departure_date'] ?? '');
$date = DateTime::createFromFormat('Y-m-d', $departureDate);
$validDate = $date && $date->format('Y-m-d') === $departureDate;

if ($passengerName === '' || $from === '' || $to === '' || !$validDate) {
    header('Location: Book.php?error=invalid');
    exit;
}

if (strcasecmp($from, $to) === 0) {
    header('Location: Book.php?error=same-city');
    exit;
}

try {
    $connection = databaseConnection();

    do {
        $bookingId = 'AIR' . date('Y') . strtoupper(bin2hex(random_bytes(3)));
        $check = $connection->prepare('SELECT COUNT(*) FROM bookings WHERE booking_id = ?');
        $check->execute([$bookingId]);
    } while ((int) $check->fetchColumn() > 0);

    $statement = $connection->prepare(
        'INSERT INTO bookings
        (booking_id, passenger_name, departure_city, destination_city, departure_date)
        VALUES (:booking_id, :passenger_name, :departure_city, :destination_city, :departure_date)'
    );
    $statement->execute([
        'booking_id' => $bookingId,
        'passenger_name' => $passengerName,
        'departure_city' => $from,
        'destination_city' => $to,
        'departure_date' => $departureDate,
    ]);

    header('Location: confirm.php?booking_id=' . urlencode($bookingId), true, 303);
    exit;
} catch (Throwable $exception) {
    error_log($exception->getMessage());
    header('Location: Book.php?error=database');
    exit;
}
