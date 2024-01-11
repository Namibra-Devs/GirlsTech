<?php include('./include/header.php') ?>

<?php
include('./admin/database/config.php');


$error_message1 = '';
$success_message1 = '';

if (isset($_POST['form_subscribe'])) {


    $send_email_from  = 'abdulgafurshaattir@gmail.com';
    $receive_email_to = 'abdulgafurshaattir@gmail.com';
    $smtp_host        = 'smtp.gmail.com';
    $smtp_port        = '587';
    $smtp_username    = 'jobid@ubids.edu.gh';
    $smtp_password    = 'b7ye6z9h1';


    if (empty($_POST['email_subscribe'])) {
        $valid = 0;
        $error_message1 .= 'Email Field is empty';
    } else {
        if (filter_var($_POST['email_subscribe'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $error_message1 .= 'Invalid email';
        } else {
            // Getting current date
            $current_date = date('Y-m-d');

            // Getting current date and time
            $current_date_time = date('Y-m-d H:i:s');

            // Inserting data into the database
            $statement = $pdo->prepare("INSERT INTO tbl_subscriber (subs_email,subs_date,subs_date_time,subs_hash,subs_active) VALUES (?,?,?,?,?)");
            $statement->execute(array($_POST['email_subscribe'], $current_date, $current_date_time, '', 1));

            $success_message1 = 'Thnak you for subscribing';
        }
    }
}

if ($error_message1 != '') {
    echo "<script>alert('" . $error_message1 . "')</script>";
}
if ($success_message1 != '') {
    echo "<script>alert('" . $success_message1 . "')</script>";
}

?>

<section class="contact">
    <div class="title" style="margin-bottom: 2rem;">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-details">
        <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253609.6745933783!2d-1.780924697680578!3d6.690058070731559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb93e59a4e4c49%3A0x829c711d7b65e682!2sKumasi!5e0!3m2!1sen!2sgh!4v1687431819106!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="form"> 
            
            <form action="">
                <label for="">Name</label>
                <input type="text" name="" id="">
                <label for="">Email</label>
                <input type="email" name="" id="">
                 <label for="">Message</label>
                 <textarea name="" id="" cols="30" rows="10"></textarea>
                 <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>
<section class="newsLetter">
    <div class="newletter-container">
        <div class="newletter-text">
            <h1>Sign up to our newsletter</h1>
            <p>Lorem Ipsum is simply dummy</p>
        </div>
        <form class="search-container" action="" method="post" class="subscription-form">
     
            <input type="text" placeholder="Enter your Email" name="email_subscribe" class="search-input">
                        <input type="submit" value="Subscribe" name="form_subscribe" class="search-button">

        </form>
    </div>
</section>

<?php include('./include/footer.php') ?>