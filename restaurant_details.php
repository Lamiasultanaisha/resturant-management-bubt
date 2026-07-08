<?php
include('db.php');
session_start();

// SQL Injection Vulnerability: URL এর 'id' ফিল্টার না করে সরাসরি কুয়েরিতে ব্যবহার করা হয়েছে
$res_id = $_GET['id']; 
$query = "SELECT * FROM restaurants WHERE id = $res_id"; 
$result = mysqli_query($conn, $query);
$restaurant = mysqli_fetch_assoc($result);

// ফিডব্যাক সাবমিট হ্যান্ডেল করা (XSS Vulnerability: ইনপুট ফিল্টার করা হয়নি)
if (isset($_POST['submit_feedback'])) {
    $comment = $_POST['comment']; // কোনো htmlspecialchars বা ফিল্টারিং নেই!
    $insert_query = "INSERT INTO feedbacks (restaurant_id, comment) VALUES ('$res_id', '$comment')";
    mysqli_query($conn, $insert_query);
}

// এই রেস্টুরেন্টের সব ফিডব্যাক নিয়ে আসা
$feedback_query = "SELECT * FROM feedbacks WHERE restaurant_id = $res_id";
$feedback_result = mysqli_query($conn, $feedback_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $restaurant['res_name']; ?> - Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 700px;">
        <a href="dashboard.php" class="btn btn-secondary btn-sm mb-3">← Back to Dashboard</a>
        
        <div class="card p-4 shadow-sm mb-4">
            <h1 class="fw-bold text-dark"><?php echo $restaurant['res_name']; ?></h1>
            <p class="text-muted">Location: <?php echo $restaurant['res_location']; ?></p>
            <p class="fw-bold text-warning">Current Rating: ⭐ 4.5/5</p>
        </div>

        <!-- ফিডব্যাক ফর্ম -->
        <div class="card p-4 shadow-sm mb-4">
            <h5>Leave a Feedback / Comment</h5>
            <form action="" method="POST">
                <div class="mb-3">
                    <textarea name="comment" class="form-control" rows="3" placeholder="Write your comment here..." required></textarea>
                </div>
                <button type="submit" name="submit_feedback" class="btn btn-dark btn-sm">Submit Feedback</button>
            </form>
        </div>

        <!-- ফিডব্যাক ডিসপ্লে সেকশন -->
        <div class="card p-4 shadow-sm">
            <h5>Customer Feedbacks</h5>
            <hr>
            <?php 
            if (mysqli_num_rows($feedback_result) > 0) {
                while($fb = mysqli_fetch_assoc($feedback_result)) {
                    echo "<div class='alert alert-secondary'>";
                    // Vulnerable Output: সরাসরি ইকো করা হয়েছে, স্ক্রিপ্ট রান করবে!
                    echo $fb['comment']; 
                    echo "</div>";
                }
            } else {
                echo "<p class='text-muted'>No feedbacks yet.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>