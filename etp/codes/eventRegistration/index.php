<?php
$conn = new mysqli("localhost", "root", "", "event_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events
$events = $conn->query("SELECT * FROM events WHERE event_date >= CURDATE()");

// Registration handling
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $eventId = $_POST['event_id'];
    $userId = $_POST['user_id'];
    if (!empty($eventId) && !empty($userId)) {
        $conn->query("INSERT INTO registrations (event_id, user_id) VALUES ('$eventId', '$userId')");
        echo "<p style='color: green;'>Successfully registered!</p>";
    } else {
        echo "<p style='color: red;'>Please fill in all fields.</p>";
    }
}

// Count registrations
$counts = $conn->query("SELECT e.event_name, COUNT(r.event_id) AS total 
                        FROM events e 
                        LEFT JOIN registrations r ON e.event_id = r.event_id 
                        GROUP BY e.event_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .event-list {
            margin-bottom: 20px;
        }
        .registration-form, .stats {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Upcoming Events</h1>
    <div class="event-list">
        <?php if ($events->num_rows > 0): ?>
            <ul>
                <?php while ($row = $events->fetch_assoc()): ?>
                    <li><?= $row['event_name'] ?> - <?= $row['event_date'] ?></li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No upcoming events.</p>
        <?php endif; ?>
    </div>

    <h2>Register for an Event</h2>
    <form method="POST" class="registration-form">
        <label for="event_id">Event ID:</label>
        <input type="number" name="event_id" id="event_id" placeholder="Enter Event ID" required><br><br>
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" id="user_id" placeholder="Enter Your User ID" required><br><br>
        <button type="submit">Register</button>
    </form>

    <h2>Event Statistics</h2>
    <div class="stats">
        <?php if ($counts->num_rows > 0): ?>
            <ul>
                <?php while ($row = $counts->fetch_assoc()): ?>
                    <li><?= $row['event_name'] ?> - Total Registrations: <?= $row['total'] ?></li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No registrations yet.</p>
        <?php endif; ?>
    </div>
</body>
</html>
