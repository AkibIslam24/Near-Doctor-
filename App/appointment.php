<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment - NearDoc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .header {
            background: white;
            padding: 15px;
            text-align: center;
            font-weight: 600;
            font-size: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .card {
            border-radius: 16px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn-primary {
            background-color: #457B9D;
            border: none;
            border-radius: 12px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #35607c;
        }

        .doctor-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
    </style>
</head>

<body>

<div class="header">
    Select Doctor for Appointment
</div>

<div class="container mt-4 mb-5">

    <!-- Doctor 1 -->
    <div class="card shadow-sm mb-4 p-3">
        <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                 class="rounded-circle doctor-img me-3">

            <div class="flex-grow-1">
                <h5 class="mb-1 fw-bold">Dr. Arif Rahman</h5>
                <p class="mb-1 text-muted">Cardiologist</p>
                <small class="text-warning">⭐ 4.9</small>
                <p class="mb-0 mt-1 fw-semibold">Fee: ৳1500</p>
            </div>
        </div>

        <a href="schedule.php?name=Dr.%20Arif%20Rahman&specialty=Cardiologist&photo=https://randomuser.me/api/portraits/men/32.jpg&fee=1500"
           class="btn btn-primary w-100 mt-3">
           Appointment Now
        </a>
    </div>


    <!-- Doctor 2 -->
    <div class="card shadow-sm mb-4 p-3">
        <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/women/44.jpg"
                 class="rounded-circle doctor-img me-3">

            <div class="flex-grow-1">
                <h5 class="mb-1 fw-bold">Dr. Nusrat Jahan</h5>
                <p class="mb-1 text-muted">Dermatologist</p>
                <small class="text-warning">⭐ 4.8</small>
                <p class="mb-0 mt-1 fw-semibold">Fee: ৳1200</p>
            </div>
        </div>

        <a href="schedule.php?name=Dr.%20Nusrat%20Jahan&specialty=Dermatologist&photo=https://randomuser.me/api/portraits/women/44.jpg&fee=1200"
           class="btn btn-primary w-100 mt-3">
           Appointment Now
        </a>
    </div>


    <!-- Doctor 3 -->
    <div class="card shadow-sm mb-4 p-3">
        <div class="d-flex align-items-center">
            <img src="https://randomuser.me/api/portraits/men/65.jpg"
                 class="rounded-circle doctor-img me-3">

            <div class="flex-grow-1">
                <h5 class="mb-1 fw-bold">Dr. Tanvir Ahmed</h5>
                <p class="mb-1 text-muted">Orthopedic</p>
                <small class="text-warning">⭐ 4.7</small>
                <p class="mb-0 mt-1 fw-semibold">Fee: ৳1800</p>
            </div>
        </div>

        <a href="schedule.php?name=Dr.%20Tanvir%20Ahmed&specialty=Orthopedic&photo=https://randomuser.me/api/portraits/men/65.jpg&fee=1800"
           class="btn btn-primary w-100 mt-3">
           Appointment Now
        </a>
    </div>

</div>

</body>
</html>