<?php  
 
if(isset($_POST['submit'])) {
 
	$mailto = "koay199944@gmail.com";  //My email address
	
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 /*$phone = $_POST['tel']; //getting customer Phome number*/
 /*$subject = $_POST['subject']; //getting subject line from client*/
 $subject2 = "Confirmation: Message was submitted successfully"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $name . "\n"
 . "Client email: " . $fromEmail . "\n\n"
 . "Client Message: " . "\n" . $_POST['message'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
 . "Regards," . "\n";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
	  echo $success;
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
	  echo $failed;
  }
 
}
 
?>