<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Customer</h2>
        <?php
            include "connection.php";
            
          
            if(isset($_GET['id']) && !empty($_GET['id'])) {
                $id = $_GET['id'];
                
              
                $sql = "SELECT * FROM customer WHERE customerName = '$id'";
                $result = $conn->query($sql);
                
                if($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
        ?>
        <form action="update.php" method="POST">
            <!-- Edit Name -->
            <input type="hidden" name="customerName" value="<?php echo $row['customerName']; ?>">
            <div class="mb-3">
                <label for="customerName" class="form-label">Name</label>
                <input type="text" class="form-control" id="customerName" name="newCustomerName" value="<?php echo $row['customerName']; ?>">
            </div>

            <!-- Edit Email -->
            <input type="hidden" name="customerEmail" value="<?php echo $row['customerEmail']; ?>">
            <div class="mb-3">
                <label for="customerEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="customerEmail" name="customerEmail" value="<?php echo $row['customerEmail']; ?>">
            </div>

            <!-- Edit Age -->
            <input type="hidden" name="customerAge" value="<?php echo $row['customerAge']; ?>">
            <div class="mb-3">
                <label for="customerAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="customerAge" name="customerAge" value="<?php echo $row['customerAge']; ?>">
            </div>

            <!-- Edit Booking Date -->
            <input type="hidden" name="bookingDate" value="<?php echo $row['bookingDate']; ?>">
            <div class="mb-3">
                <label for="bookingDate" class="form-label">Booking Date</label>
                <input type="date" class="form-control" id="bookingDate" name="bookingDate" value="<?php echo $row['bookingDate']; ?>">
            </div>

            <!-- Edit Booking Time -->
            <input type="hidden" name="bookingTime" value="<?php echo $row['bookingTime']; ?>">
            <div class="mb-3">
                <label for="bookingTime" class="form-label">Booking Time</label>
                <input type="time" class="form-control" id="bookingTime" name="bookingTime" value="<?php echo $row['bookingTime']; ?>">
            </div>

            <!-- Edit Booking Length -->
            <input type="hidden" name="bookingLength" value="<?php echo $row['bookingLength']; ?>">
            <div class="mb-3">
                <label for="bookingLength" class="form-label">Booking Duration</label>
                <input type="number" class="form-control" id="bookingLength" name="bookingLength" value="<?php echo $row['bookingLength']; ?>">
            </div>

            <!-- Edit Booking Facilities -->
            <input type="hidden" name="bookingFacilities" value="<?php echo $row['bookingFacilities']; ?>">
            <div class="mb-3">
            <label for="bookingFacilities" class="form-label">Booking Facilities</label>
                <select class="form-select" id="bookingFacilities" name="bookingFacilities">
                    <option value="Futsal" <?php if ($row['bookingFacilities'] == "Futsal") echo "selected"; ?>>Futsal</option>
                    <option value="Takraw" <?php if ($row['bookingFacilities'] == "Takraw") echo "selected"; ?>>Takraw</option>
                    <option value="Gym" <?php if ($row['bookingFacilities'] == "Gym") echo "selected"; ?>>Gym</option>
                </select>
            </div>


            <!-- Hidden ID Field -->
            <input type="hidden" name="id" value="<?php echo $row['customerName']; ?>">
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <?php
                } else {
                    echo "No customer found with that ID.";
                }
            } else {
                echo "No customer ID provided.";
            }
        ?>
    </div>
</body>
</html>
