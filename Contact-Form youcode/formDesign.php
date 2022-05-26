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
  <div id="fname">
    <label class="mt-2" for="fname">First Name:</label><br>
    <input type="text" name="fname" class="w-100" required><br>
  </div>

  <!-- last name -->
  <div id="lname">
    <label class="mt-2" for="lname">Last Name:</label><br>
    <input type="text" name="lname" class="w-100" required><br>
  </div>

  <!-- email -->
  <div id="email">
    <label class="mt-2" for="email">Email:</label><br>
    <input type="email" name="email" class="w-100" required><br>
  </div>


  <!-- phone -->
  <div id="phone">
    <label class="mt-2" for="phone">Phone:</label><br>
    <input type="text" name="phone" class="w-100" required><br>
  </div>

  <!-- subject -->
  <div id="subject">
    <label class="mt-2" for="subject">Subject:</label><br>
    <input type="text" name="subject" class="w-100" required><br>
  </div>

  <!-- message -->
  <div id="message">
    <label class="mt-2" for="message">Message:</label><br>
    <input type="text" name="message" class="w-100" required><br>
  </div>

  <input type="submit" class="mt-3" value="Send" name="sub">
</form>

<script>
  // first name
  var Fname = document.getElementById('fname');
  const Fname_display = localStorage.getItem('Fname');
  Fname.style.display = Fname_display;

  // last name
  var Lname = document.getElementById('lname');
  const Lname_display = localStorage.getItem('Lname');
  Lname.style.display = Lname_display;

  // email
  var email = document.getElementById('email');
  const email_display = localStorage.getItem('email');
  email.style.display = email_display;

  // subject
  var subject = document.getElementById('subject');
  const subject_display = localStorage.getItem('subject');
  subject.style.display = subject_display;

  // phone
  var phone = document.getElementById('phone');
  const phone_display = localStorage.getItem('phone');
  phone.style.display = phone_display;

  // message
  var message = document.getElementById('message');
  const message_display = localStorage.getItem('message');
  message.style.display = message_display;
</script>

<!-- <script>
  // first name
  var Fname = document.getElementById('Fname');
  Fname.style.display = localStorage.getItem('Fname');

  // last name
  var Lname = document.getElementById('Lname');
  Lname.style.display = localStorage.getItem('Lname');

  // phone
  var phone = document.getElementById('phone');
  phone.style.display = localStorage.getItem('phone');

  // email
  var email = document.getElementById('email');
  email.style.display = localStorage.getItem('email');

  // subject
  var subject = document.getElementById('subject');
  subject.style.display = localStorage.getItem('subject');

  // message
  var message = document.getElementById('message');
  msg.style.display = localStorage.getItem('msg');
</script> -->