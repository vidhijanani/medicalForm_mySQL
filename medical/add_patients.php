<?php 
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Patient Enrollment Form</title>
</head>
<body>

<div class="container mt-5 col-md-6 offset-md-3">
  <h2 class="mb-4 text-center display-5">Medical Patient Enrollment Form</h2>
  <form action="patient_process.php" method="POST" enctype="multipart/form-data">
    <!-- Patient Name -->
    <div class="form-group">
      <label for="patientName">Patient Name:</label>
      <input type="text" class="form-control" id="patientName" name="patientName" required>
    </div>

    <!-- Date of Birth -->
    <div class="form-group">
      <label for="dob">Date of Birth:</label>
      <input type="date" class="form-control" id="dob" name="dob" required>
    </div>

    <!-- Gender -->
    <div class="form-group">
      <label>Gender:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
        <label class="form-check-label" for="female">Female</label>
      </div>
    </div>

    <!-- Address -->
    <div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control" id="address" name="address" rows="5" required></textarea>
    </div>

    <!-- Contact Information -->
    <div class="form-group">
      <label for="contact">Contact Number:</label>
      <input type="tel" class="form-control" id="contact" name="contact" pattern="[0-9]{10}" required>
      <small class="form-text text-muted">Please enter a 10-digit phone number.</small>
    </div>

      <!-- Photograph Upload -->
    <div class="form-group mt-3 mb-3">
      <label for="photo">Upload Photograph:</label>
      <input type="file" class="form-control-file" id="photo" name="photo" required>
    </div>

    <!-- Submit Button -->
   <div class="text-center d-grid gap-2 d-md-block">
      <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
    </div>
  </form>
</div>
</body>
</html>