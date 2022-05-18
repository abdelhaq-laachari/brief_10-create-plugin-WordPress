
<?php
function insertcont()
{
    global $wpdb;

    if(isset($_POST['sub'])){

        // die(print_r($_POST['name']));
        // if( !empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['subject']) || !empty($_POST['message']))
        //     {
                
                // $connection = mysqli_connect('localhost','root','');
                // mysqli_select_db($connection,"brief_9_wordpress_3");

                $name = $_POST['fname'];
                $email = $_POST['lname'];
                $subj = $_POST['subject'];
                $mess = $_POST['msg'];

                // $name = "fjjfj";
                // $email = "jdjddj";
                // $subj ="djdjdj";
                // $mess = "jdjdj";

                $query="INSERT INTO wp_aa_form_table (name,email,subject,message) VALUES ('$name','$email','$subj','$mess')";
                $wpdb->query($query);
                
            //     mysqli_query($connection,$query);
            // }else{
            //     echo '<h1 style="color:red;"> All fields are required</h1>';
            // }
    }
    
}



    
?>

<form action="" method="post" enctype="multipart/form-data" onsubmit="<?php insertcont() ?> ">
  <label class="mt-2" for="fname">Full Name:</label><br>
  <input type="text" id="fname" name="fname" class="w-100"><br>

  <label class="mt-2" for="lname">Email:</label><br>
  <input type="email" id="lname" name="lname" class="w-100"><br>

  <label class="mt-2" for="subject">Subject:</label><br>
  <input type="text" id="subject" name="subject" class="w-100"><br>

  <label class="mt-2" for="msg">Message:</label><br>
  <textarea type="text" id="msg" name="msg" class="w-100"></textarea> <br>

  <input type="submit" class="mt-3" value="Send Message" name="sub"> 
</form>


