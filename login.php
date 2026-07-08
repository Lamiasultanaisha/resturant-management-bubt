<?php
// ডাটাবেস কানেকশন ফাইল যুক্ত করা
include('db.php');
session_start();

$error = "";

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // ডাটাবেসে ইউজার খোঁজার কুয়েরি
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // লগিন সফল হলে সেশন তৈরি করা
        $_SESSION['username'] = $username;
        header("location: dashboard.php"); // ড্যাশবোর্ডে পাঠিয়ে দেওয়া
    } else {
        $error = "ইউজারনেম অথবা পাসওয়ার্ড ভুল হয়েছে!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - FoodVerse</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
            max-width: 400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="login-container w-100">
        <h3 class="text-center fw-bold text-dark mb-4">Admin Login</h3>
        
        <!-- এরর মেসেজ দেখানোর জন্য -->
        <?php if($error != "") { ?>
            <div class="alert alert-danger text-center py-2"><?php echo $error; ?></div>
        <?php } ?>

        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" name="login" class="btn btn-warning w-100 fw-bold mt-2">Login</button>
        </form>
        
        <div class="text-center mt-3">
            <a href="index.php" class="text-muted small">← Back to Home</a>
        </div>
    </div>
</div>

</body>
</html>