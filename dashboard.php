<?php
include('db.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

// SQL Injection Vulnerability: এখানে সরাসরি ইউজার ইনপুট কুয়েরিতে বসানো হয়েছে
$query = "SELECT * FROM restaurants";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard (Vulnerable)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="dashboard.php">Admin Dashboard</a>
            <span class="text-white">Welcome, <?php echo $_SESSION['username']; ?> | <a href="logout.php" class="btn btn-danger btn-sm">Logout</a></span>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="fw-bold mb-4">Registered Restaurants</h2>
        <div class="row g-4">
            <?php 
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body bg-white rounded">
                            <h5 class="card-title fw-bold text-capitalize"><?php echo $row['res_name']; ?></h5>
                            <p class="text-muted"><i class="fas fa-map-marker-alt text-danger me-2"></i><?php echo $row['res_location']; ?></p>
                            
                            <!-- URL ID Parameter Parameter: এখানে ক্লিক করলে ID সহ ইউআরএল ওপেন হবে -->
                            <div class="d-grid mt-3">
                                <a href="restaurant_details.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm fw-bold">View Details & Feedback</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                }
            }
            ?>
        </div>
    </div>
</body>
</html>