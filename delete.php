<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    
   
    $sql = "DELETE FROM customer WHERE customerName='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        
        header("Location: viewCustomer.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
