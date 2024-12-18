<!-- <?php
        // $host = "localhost";
        // $username = "root";
        // $password = "12345678";
        // $db = "machinery";

        // // Create a connection using mysqli_connect
        // $conn = mysqli_connect($host, $username, $password, $db);

        // // Check if the connection was successful
        // if (!$conn) {
        //     die("Connection failed: " . mysqli_connect_error());
        // }

        // // Set the character set (optional, based on your database setup)
        // mysqli_set_charset($conn, "utf8");

        // Your database operations can go here...
        ?> -->

<?php
$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com";
$port = 4000;
$username = "gaHAFbZSQDcArxv.root";
$password = "lrCUVC5ZR3FTvPUX";
$db = "machinery";
$ca_cert = "/etc/ssl/cert.pem";

// Create a connection with SSL options
$conn = mysqli_init();

// Set SSL options
mysqli_ssl_set($conn, NULL, NULL, $ca_cert, NULL, NULL);

// Establish a connection
if (!mysqli_real_connect($conn, $host, $username, $password, $db, $port, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character set (optional, based on your database setup)
mysqli_set_charset($conn, "utf8");

// echo "Connected successfully!";

// Your database operations can go here...

// Close the connection
// mysqli_close($conn);
?>