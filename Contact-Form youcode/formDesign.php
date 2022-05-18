
<?php
function insertcont()
{
    global $wpdb;

    if(isset($_POST['sub'])){

                $name = $_POST['fname'];
                $email = $_POST['lname'];
                $subj = $_POST['subject'];
                $mess = $_POST['msg'];

                $query="INSERT INTO wp_aa_form_table (name,email,subject,message) VALUES ('$name','$email','$subj','$mess')";
                $wpdb->query($query);
            
    }
    
}



    
?>

<form action="" method="post" enctype="multipart/form-data" onsubmit="<?php insertcont() ?> ">
  <label class="mt-2" for="fname">Full Name:</label><br>
  <input type="text" id="fname" name="fname" class="w-100" required><br>

  <label class="mt-2" for="lname">Email:</label><br>
  <input type="email" id="lname" name="lname" class="w-100" required><br>

  <label class="mt-2" for="subject">Subject:</label><br>
  <input type="text" id="subject" name="subject" class="w-100" required><br>

  <label class="mt-2" for="msg">Message:</label><br>
  <textarea type="text" id="msg" name="msg" class="w-100" required></textarea> <br>

  <input type="submit" class="mt-3" value="Send" name="sub"> 
</form>


