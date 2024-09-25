<?php
// Initialize an array to store flight details
$flights = [
    ['flight_number' => 'FL123', 'destination' => 'New York', 'seats_available' => 5],
    ['flight_number' => 'FL456', 'destination' => 'London', 'seats_available' => 2],
    ['flight_number' => 'FL789', 'destination' => 'Paris', 'seats_available' => 0]
];

// Array to store passenger reservations
$reservations = [];

// Function to add a new flight
function addFlight(&$flights, $flightNumber, $destination, $seatsAvailable) {
    $flights[] = ['flight_number' => $flightNumber, 'destination' => $destination, 'seats_available' => $seatsAvailable];
    echo "Flight $flightNumber to $destination added successfully.<br>";
}

// Function to book a flight
function bookFlight(&$flights, &$reservations, $flightNumber) {
    foreach ($flights as &$flight) {
        if ($flight['flight_number'] === $flightNumber && $flight['seats_available'] > 0) {
            $flight['seats_available']--;
            $reservations[] = $flightNumber;
            echo "Booking confirmed for flight $flightNumber. Seats left: {$flight['seats_available']}.<br>";
            return;
        }
    }
    echo "Booking failed. Flight not found or no seats available.<br>";
}

// Function to cancel a booking
function cancelBooking(&$flights, &$reservations, $flightNumber) {
    foreach ($reservations as $index => $reservation) {
        if ($reservation === $flightNumber) {
            unset($reservations[$index]);
            foreach ($flights as &$flight) {
                if ($flight['flight_number'] === $flightNumber) {
                    $flight['seats_available']++;
                    echo "Booking for flight $flightNumber canceled. Seats available: {$flight['seats_available']}.<br>";
                    return;
                }
            }
        }
    }
    echo "Cancellation failed. No reservation found for flight $flightNumber.<br>";
}

// Function to check seat availability for a specific flight
function checkSeatAvailability($flights, $flightNumber) {
    foreach ($flights as $flight) {
        if ($flight['flight_number'] === $flightNumber) {
            echo "Flight $flightNumber to {$flight['destination']}: Seats available: {$flight['seats_available']}.<br>";
            return;
        }
    }
    echo "Flight not found.<br>";
}

// Function to generate reservation report
function generateReport($flights) {
    echo "Reservation Report:<br>";
    foreach ($flights as $flight) {
        echo "Flight {$flight['flight_number']} to {$flight['destination']}: Seats available: {$flight['seats_available']}.<br>";
    }
}

// Example operations:
echo "Flight Management System<br>";

// Admin adds a new flight
addFlight($flights, 'FL999', 'Tokyo', 10);

// User books a flight
bookFlight($flights, $reservations, 'FL456');

// User cancels a booking
cancelBooking($flights, $reservations, 'FL456');

// Check seat availability for a flight
checkSeatAvailability($flights, 'FL123');

// Generate and print the report
generateReport($flights);
?>
