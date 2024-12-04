<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "auth";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    
    $users = [
        [
            'id'=> 1,
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT)
        ],
        [
            'id'=> 2,
            'username' => 'user1',
            'email' => 'kumarvansh16aug@gmail.com',
            'password' => password_hash('123', PASSWORD_DEFAULT)
        ],
        [
            'id'=> 3,
            'username' => 'user2',
            'email' => 'user2@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT)
        ]
    ];
?>