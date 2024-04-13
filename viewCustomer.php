<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">SHAHNAZ SPORT CENTRE & FUNTAINMENT ADMIN</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a type="button" class="btn btn-primary nav-link active" href="addCustomer.php">Add New</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-success nav-link" onclick="window.print()" style="margin-left: 50px">Print report</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>EMAIL</th>
                <th>BOOKING DATE</th>
                <th>BOOKING TIME</th>
                <th>BOOKING DURATION</th>
                <th>BOOKING FACILITIES</th>
                <th>TOTAL PRICE</th>
                <th class="no-print">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            $sql = "SELECT * FROM customer";
            $result = $conn->query($sql);
            if(!$result) {
                die("Invalid query!");
            }
            while($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <th>{$row['customerName']}</th>
                    <td>{$row['customerAge']}</td>
                    <td>{$row['customerEmail']}</td>
                    <td>{$row['bookingDate']}</td>
                    <td>{$row['bookingTime']}</td>
                    <td>{$row['bookingLength']}</td>
                    <td>{$row['bookingFacilities']}</td>
                    <td>RM{$row['totalPrice']}</td>
                    <td class='no-print'>
                        <a class='btn btn-success' href='edit.php?id={$row['customerName']}'>Edit</a>
                        <a class='btn btn-danger' href='delete.php?id={$row['customerName']}'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
