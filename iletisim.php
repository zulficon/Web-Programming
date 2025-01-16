<?php
$servername = "localhost";
$username = "root";         
$password = "";             
$dbname = "iletisim_db";    


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Baglanti hatasi: " . $conn->connect_error);
}


$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);


$conn->query("CREATE TABLE IF NOT EXISTS iletisim (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO iletisim (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Mesajınız başarıyla gönderildi!</p>";
    } else {
        echo "<p>Hata: " . $conn->error . "</p>";
    }
}


$conn->close();
?>
