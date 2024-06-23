<!-- resources/views/booking/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="{{ asset('css/bookingform.css') }}"> <!-- Make sure the path to bookingform.css is correct -->
    <style>
        /* Inline CSS to demonstrate styling, move to bookingform.css for production */
        /* resources/css/bookingform.css */

body {
    font-family: 'Roboto', sans-serif;
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 20px;
    margin: 0;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #34495e;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border: 1px solid #7f8c8d;
}

h1 {
    text-align: center;
    color: #ecf0f1;
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #bdc3c7;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #95a5a6;
    border-radius: 4px;
    background-color: #2c3e50;
    color: #ecf0f1;
    font-family: 'Roboto', sans-serif;
}

.form-group input::placeholder,
.form-group select {
    color: #95a5a6;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #e74c3c;
    border: none;
    border-radius: 4px;
    color: #ecf0f1;
    font-size: 16px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #c0392b;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Form</h1>
        <form action="{{ route('booking.submit') }}" method="post">
            @csrf <!-- CSRF protection token -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="checkin">Check-In Date:</label>
                <input type="date" id="checkin" name="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Check-Out Date:</label>
                <input type="date" id="checkout" name="checkout" required>
            </div>
            <div class="form-group">
                <label for="room">Room Type:</label>
                <select id="room" name="room" required>
                    <option value="" disabled selected>Select room type</option>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="adults">Number of Adults:</label>
                <input type="number" id="adults" name="adults" min="1" required>
            </div>
            <div class="form-group">
                <label for="children">Number of Children:</label>
                <input type="number" id="children" name="children" min="0" required>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>
