<?php
session_start();
include_once 'Database.php';
include_once 'Contact.php';

$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $contact = new Contact($connection);

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    
    if ($contact->addContact($name, $email, $phone, $subject, $message, $username)) {
        header("Location: ContactUs.php");
        exit;
    } else {
        echo "Error sending the message!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookaxy</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
<?php include 'Navbar.php';?>

    <div class="contact-us">
        <div class="contact-us-content">
            <div class="contact-us-header">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Please use the form below to get in touch.</p>   
            </div>
            <div class="contact-form" >
                    <form action="ContactUs.php" method="POST" id="form">
                        <div class="contact-us-rows">
                            <div class="label-input">
                                <p><label for="name">Name</label></p>
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="label-input">
                                <p><label for="email">Email</label></p>
                                <input type="email" id="email" name="email" placeholder="Your Email" required>
                            </div>
                        </div>

                        <div class="contact-us-rows">
                            <div class="label-input">
                                <p><label for="phone">Phone Number</label></p>
                                <input type="tel" id="phone" name="phone" placeholder="Your Phone Number">
                            </div>
                            <div class="label-input"> 
                                <p><label for="subject">Subject</label></p>
                                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            </div>
                        </div>

                        <div class="contact-us-rows">
                            <div class="message-label-input">
                                <p><label for="message">Message</label></p>
                                <textarea id="message" name="message" placeholder="Write your message here..." rows="5" required></textarea>
                                <button type="submit" style="margin: 20px auto;" id="message-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>


    <?php include 'Footer.php';
   ?>
    
    <!-- <script src="contactus.js"> -->
    </script>
</body>
</html>

