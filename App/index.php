<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NearDoc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-3">

    <!-- HEADER WITH LOGO -->
    <div class="d-flex align-items-center mb-4">
        <div class="logo-icon me-2">
            <i class="fa-solid fa-square-plus"></i>
        </div>
        <div class="logo-text">
            <span class="logo-blue">NearDoc</span>
        </div>
    </div>

    <!-- SEARCH -->
    <input type="text" class="form-control search-bar" placeholder="Search doctor, symptom...">
    <div class="location mt-2">
        <i class="fa-solid fa-location-dot"></i> Dhaka, Dhanmondi
    </div>

    <!-- BUTTONS -->
    <div class="row mt-4 g-3">
        <div class="col-6">
            <a href="emergency.php" class="btn emergency-btn w-100 text-center">
                <i class="fa-solid fa-truck-medical fa-2x"></i>
                <div>Emergency Now</div>
                <small>Doc reaches in 10-20 mins</small>
            </a>
        </div>
        <div class="col-6">
    <a href="appointment.php" class="btn book-btn w-100 text-center">
        <i class="fa-solid fa-calendar-check fa-2x"></i>
        <div>Book Appointment</div>
        <small>Scheduled home visits</small>
    </a>
</div>
    </div>

    <!-- DOCTORS SECTION -->
    <h5 class="mt-5 mb-3">Professional Doctors</h5>

    <div id="doctorList"></div>

</div>

<script src="script.js"></script>
</body>
</html>