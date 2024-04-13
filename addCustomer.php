<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Customer</h2>
        <form action="update.php" method="POST">

        <!--CUSTOMER NAME-->
            <div class="mb-3">
                <label for="customerName" class="form-label">Name</label>
                <input type="text" class="form-control" id="customerName" name="customerName">
            </div>

        
        <!--CUSTOMER AGE-->
        <div class="mb-3">
                <label for="customerAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="customerAge" name="customerAge">
            </div>


        <!--CUSTOMER EMAIL-->
        <div class="mb-3">
                <label for="customerEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="customerEmail" name="customerEmail">
            </div>


        <!--BOOKING DATE-->
        <div class="mb-3">
                <label for="bookingDate" class="form-label">Booking Date</label>
                <input type="date" class="form-control" id="bookingDate" name="bookingDate">
            </div>

        
        <!--BOOKING TIME-->
        <div class="mb-3">
                <label for="bookingTime" class="form-label">Booking Time</label>
                <input type="time" class="form-control" id="bookingTime" name="bookingTime">
            </div>


        <!--BOOKING LENGTH-->
        <div class="mb-3">
            <label for="bookingLength" class="form-label">Booking Duration</label>
                <select class="form-select" id="bookingLength" name="bookingLength">
                    <option value="1" selected>1 hour</option>
                    <option value="2">2 hours</option>
                    <option value="3">3 hours</option>
                </select>
            </div>


        <!--BOOKING FACILITIES-->
        <div class="mb-3">
        <label for="bookingFacilities" class="form-label">Booking Facilities</label>
    <select class="form-select" id="bookingFacilities" name="bookingFacilities">
        <option value="Futsal">Futsal</option>
        <option value="Takraw">Takraw</option>
        <option value="Gym">Gym</option>
    </select>
            </div>


            <button type="submit" class="btn btn-primary">Add Customer</button>
        </form>
    </div>
</body>
</html>
