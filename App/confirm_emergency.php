<?php
$name = $_GET['name'] ?? 'Doctor';
$eta  = $_GET['eta'] ?? '15-20';
$fee  = $_GET['fee'] ?? '4000';
$img  = $_GET['img'] ?? 'https://randomuser.me/api/portraits/men/32.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Confirm Emergency</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container py-4 emergency-confirm">

<!-- HEADER -->
<div class="text-center mb-4">
    <div class="logo-text">NearDoc</div>
    <h5 class="mt-2">Confirm Emergency Call</h5>
</div>

<!-- SECTION 1: CONSENT -->
<div class="consent-box mb-4">
    <div class="important-title">IMPORTANT: PRIMARY TREATMENT ONLY</div>
    <p class="mt-2 small">
        This service provides immediate primary care only. 
        NearDoc is not liable for hospital-level treatment.
    </p>

    <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" id="agreeCheck">
        <label class="form-check-label">
            I Agree & Proceed
        </label>
    </div>
</div>

<!-- SECTION 2: DOCTOR & ETA -->
<?php include 'doctor_card_component.php'; ?>

<!-- SECTION 3: FEE & PAYMENT -->
<div class="fee-card mb-4">
    <div class="d-flex justify-content-between align-items-center">
        <strong>Total Fee</strong>
        <strong class="text-danger"><?php echo $fee; ?> BDT</strong>
    </div>

    <?php include 'payment_selector_component.php'; ?>
</div>

<!-- SECTION 4: FINAL ACTION -->
<button id="confirmBtn" class="btn confirm-btn w-100" disabled>
    CONFIRM EMERGENCY CALL
</button>

<div class="text-center small mt-2 text-muted">
    Keep patient's NID & prescriptions ready.
</div>

</div>

<script src="confirm.js"></script>
</body>
</html>