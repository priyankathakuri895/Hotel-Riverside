<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
</head>

<body>

    <h2>🎉 Booking Confirmed!</h2>

    <p>Hello {{ $booking->name }},</p>

    <p>
        Your booking has been received successfully.
    </p>

    <h3>Booking Details:</h3>

    <ul>
        <li>
            <strong>Room:</strong>
            {{ $booking->room->type ?? 'Room' }}
        </li>

        <li>
            <strong>Check In:</strong>
            {{ $booking->check_in }}
        </li>

        <li>
            <strong>Check Out:</strong>
            {{ $booking->check_out }}
        </li>

        <li>
            <strong>Guests:</strong>
            {{ $booking->guests }}
        </li>

        <li>
            <strong>Status:</strong>
            {{ $booking->status }}
        </li>
    </ul>

    <p>
        Thank you for choosing Hotel Riverside ❤️
    </p>

</body>

</html>