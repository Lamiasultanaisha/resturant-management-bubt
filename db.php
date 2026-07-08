<?php
$host = "localhost";
$user = "root";
$password = ""; // XAMPP-এর ডিফল্ট পাসওয়ার্ড ফাঁকা থাকে
$dbname = "restaurant_db";
$port = 3307; // যেহেতু আমরা MySQL পোর্ট ৩৩০৭ ব্যবহার করছি

// ডাটাবেস কানেকশন তৈরি করা
$conn = mysqli_connect($host, $user, $password, $dbname, $port);

// কানেকশন চেক করা
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>