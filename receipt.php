<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Booking Receipt</h2>
        <div class="card">
            <div class="card-body">
                <?php
                
                // Check if form data is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve form data
                    $customerName = $_POST["customerName"];
                    $customerAge = $_POST["customerAge"];
                    $customerEmail = $_POST["customerEmail"];
                    $bookingDate = $_POST["bookingDate"];
                    $bookingTime = $_POST["bookingTime"];
                    $bookingLength = $_POST["bookingLength"];
                    $bookingFacilities = $_POST["bookingFacilities"];

                    // Display receipt details
                    echo "<p><strong>Name:</strong> $customerName</p>";
                    echo "<p><strong>Age:</strong> $customerAge</p>";
                    echo "<p><strong>Email:</strong> $customerEmail</p>";
                    echo "<p><strong>Booking Date:</strong> $bookingDate</p>";
                    echo "<p><strong>Booking Time:</strong> $bookingTime</p>";
                    echo "<p><strong>Booking Duration:</strong> $bookingLength hour(s)</p>";
                    echo "<p><strong>Booking Facilities:</strong> $bookingFacilities</p>";
                } else {
                    echo "<p>No data submitted. Please go back and fill out the booking form.</p>";
                }


                
                ?>
                 <div class="mt-3">
                    <button onclick="window.print()" class="btn btn-primary">Print Receipt</button>
                    <a href="home.html" class="btn btn-secondary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
