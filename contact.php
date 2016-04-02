 <?php 
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname']; 
    $email=$_POST['email']; 
    $message=$_POST['message']; 
    if (($firstname=="")||($lastname=="")||($email=="")||($message=="")) 
    { 
    echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
    } 
    else {         
    $from="From: $firstname $lastname <$email>\r\nReturn-path: $email"; 
    $subject="Message sent using Wassim's contact form"; 
    mail("contact@wassimbenadel.com", $subject, $message, $from); 
    echo "<h4 class='text-center'>Thank you for contacting us, we will respond withing 24 hours!</h4>"; 
    }
?>
