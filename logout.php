<?php
session_start();
session_destroy(); // সব সেশন ডাটা মুছে ফেলা
header("location: index.php"); // হোমপেজে রিডাইরেক্ট
exit();
?>