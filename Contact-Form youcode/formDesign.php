<?php
function insertcont()
{
  global $wpdb;

  if (isset($_POST['sub'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['lname'];
    $phone = $_POST['phone'];
    $subj = $_POST['subject'];
    $mess = $_POST['message'];

    $query = "INSERT INTO wp_aa_form_table (first_name, last_name, email, phone, subject, message) VALUES ('$fname', '$lname', '$email', '$phone', '$subj','$mess')";
    $wpdb->query($query);
  }
}




?>

<form action="" method="post" enctype="multipart/form-data" onsubmit="<?php insertcont() ?> ">

  <!-- first name -->
  <div class="form-group" id="Fname" >
    <label class="mt-2" for="fname">First Name:</label><br>
    <input type="text" name="fname" class="w-100" required><br>
  </div>

  <!-- last name -->
  <div class="form-group" id="Lname" >
    <label class="mt-2" for="lname">Last Name:</label><br>
    <input type="text" name="lname" class="w-100" required><br>
  </div>

  <!-- email -->
  <div class="form-group" id="email" >
    <label class="mt-2" for="email">Email:</label><br>
    <input type="email" name="email" class="w-100" required><br>
  </div>


  <!-- phone -->
  <div class="form-group" id="phone" >
    <label class="mt-2" for="phone">Phone:</label><br>
    <input type="text" name="phone" class="w-100" required><br>
  </div>

  <!-- subject -->
  <div class="form-group" id="subject" >
    <label class="mt-2" for="subject">Subject:</label><br>
    <input type="text" name="subject" class="w-100" required><br>
  </div>

  <!-- message -->
  <div class="form-group" id="message" >
    <label class="mt-2" for="message">Message:</label><br>
    <input type="text" name="message" class="w-100" required><br>
  </div>

  <input type="submit" class="mt-3" value="Send" name="sub">
</form>