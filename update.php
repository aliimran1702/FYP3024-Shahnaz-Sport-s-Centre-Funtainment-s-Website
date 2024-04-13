<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['customerName']) && isset($_POST['customerAge']) && isset($_POST['customerEmail']) && isset($_POST['bookingDate']) && isset($_POST['bookingTime']) && isset($_POST['bookingFacilities']) && isset($_POST['bookingLength'])) {
        
        $customerName = $conn->real_escape_string($_POST['customerName']);
        $customerAge = $conn->real_escape_string($_POST['customerAge']);
        $customerEmail = $conn->real_escape_string($_POST['customerEmail']);
        $bookingDate = $conn->real_escape_string($_POST['bookingDate']);
        $bookingTime = $conn->real_escape_string($_POST['bookingTime']);
        $bookingFacilities = $conn->real_escape_string($_POST['bookingFacilities']);
        $bookingLength = $conn->real_escape_string($_POST['bookingLength']);
        
        // Define prices for each facility per hour
        $prices = [
            "Gym" => 7,
            "Takraw" => 10,
            "Futsal" => 15
        ];
        
        // Calculate total price based on facility and booking length
        $totalPrice = $prices[$bookingFacilities] * $bookingLength;
        
        if(isset($_POST['id']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
            $sql = "UPDATE customer SET customerAge='$customerAge', customerEmail='$customerEmail', bookingDate='$bookingDate', bookingTime='$bookingTime', bookingFacilities='$bookingFacilities', bookingLength='$bookingLength', totalPrice='$totalPrice' WHERE customerName='$id'";
        } else {
            $sql = "INSERT INTO customer (customerName, customerAge, customerEmail, bookingDate, bookingTime, bookingFacilities, bookingLength, totalPrice) VALUES ('$customerName', '$customerAge', '$customerEmail', '$bookingDate', '$bookingTime', '$bookingFacilities', '$bookingLength', '$totalPrice')";
        }
        
        if ($conn->query($sql) === TRUE) {
            echo "Record ";
            if(isset($_POST['id']) && !empty($_POST['id'])) {
                echo "updated";
            } else {
                echo "added";
            }
            echo " successfully";
        
            header("Location: viewCustomer.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "All fields are required";
    }
}

$conn->close();
?>
