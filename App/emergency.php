<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Emergency Doctors - NearDoc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container py-4">

    <h4 class="mb-4 text-center">🚑 Available Emergency Doctors</h4>

    <div class="row g-4">

        <!-- Doctor 1: Dr. Arif Rahman -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="emergency-card text-center">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="doctor-img">
                <h5 class="mt-3">Dr. Arif Rahman</h5>
                <p>General Physician (MBBS)</p>
                <p>Distance: 1.2 km</p>
                <p><strong>Emergency Fee: 4000 BDT</strong></p>

                <a href="confirm_emergency.php?name=Dr.%20Arif%20Rahman&eta=12-18&fee=4000&img=https://randomuser.me/api/portraits/men/32.jpg"
                   class="btn btn-danger w-100">
                   Call Emergency
                </a>
            </div>
        </div>

        <!-- Doctor 2: Dr. Nusrat Jahan -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="emergency-card text-center">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="doctor-img">
                <h5 class="mt-3">Dr. Nusrat Jahan</h5>
                <p>Cardiologist (MBBS)</p>
                <p>Distance: 2.5 km</p>
                <p><strong>Emergency Fee: 5000 BDT</strong></p>

                <a href="confirm_emergency.php?name=Dr.%20Nusrat%20Jahan&eta=15-22&fee=5000&img=https://randomuser.me/api/portraits/women/44.jpg"
                   class="btn btn-danger w-100">
                   Call Emergency
                </a>
            </div>
        </div>

        <!-- Doctor 3: Dr. Tanvir Ahmed -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="emergency-card text-center">
                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="doctor-img">
                <h5 class="mt-3">Dr. Tanvir Ahmed</h5>
                <p>Neurologist (MBBS)</p>
                <p>Distance: 4.8 km</p>
                <p><strong>Emergency Fee: 6500 BDT</strong></p>

                <a href="confirm_emergency.php?name=Dr.%20Tanvir%20Ahmed&eta=20-30&fee=6500&img=https://randomuser.me/api/portraits/men/45.jpg"
                   class="btn btn-danger w-100">
                   Call Emergency
                </a>
            </div>
        </div>

    </div>

    <div class="mt-5 text-center">
        <a href="index.php" class="btn btn-secondary">← Back to Home</a>
    </div>

</div>

</body>
</html>