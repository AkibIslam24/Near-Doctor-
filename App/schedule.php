<?php
$name = $_GET['name'] ?? 'Doctor';
$specialty = $_GET['specialty'] ?? 'MBBS';
$photo = $_GET['photo'] ?? 'https://randomuser.me/api/portraits/men/32.jpg';
$fee = $_GET['fee'] ?? '1500';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Select Schedule</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container py-3 schedule-page">

<!-- HEADER -->
<div class="d-flex align-items-center mb-3">
    <button class="btn btn-light me-2" onclick="history.back()">←</button>
    <h5 class="mb-0">Select Schedule</h5>
</div>

<!-- DOCTOR MINI PROFILE -->
<div class="doctor-mini-card mb-4">
    <img src="<?php echo $photo; ?>" class="mini-avatar">
    <div>
        <div class="mini-name"><?php echo $name; ?></div>
        <div class="mini-specialty"><?php echo $specialty; ?></div>
    </div>
</div>

<!-- DATE SELECTION -->
<h6>Select Date</h6>
<div id="dateContainer" class="date-scroll mb-4"></div>

<!-- TIME SLOTS -->
<h6>Available Time Slots</h6>
<div id="timeSlotsContainer"></div>

<!-- PROBLEM DESCRIPTION -->
<div class="mt-4">
    <label class="form-label">Reason for Visit (Optional)</label>
    <textarea class="form-control" rows="3" placeholder="Describe symptoms..."></textarea>
</div>

<!-- SHARE LOCATION -->
<div class="form-check mt-3">
    <input class="form-check-input" type="checkbox" id="shareLocation">
    <label class="form-check-label">
        Share my location with doctor
    </label>
</div>

<!-- STICKY FOOTER -->
<div class="schedule-footer">
    <div id="summaryText">No time selected</div>
    <button id="confirmScheduleBtn" class="btn btn-primary w-100 mt-2" disabled>
        Confirm Appointment
    </button>
</div>

</div>

<script>
const doctorFee = "<?php echo $fee; ?>";
</script>
<script src="schedule.js"></script>

</body>
</html>