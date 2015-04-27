<?php
$errors = '';
$myemail = 'danieljbrount@gmail.com';  /*Change to your e-mail address.*/
if(empty($_POST['name'])  ||   /*Ensure the values in quotation marks here match exactly your name= value on your input/textarea elements.*/
/*You can add additional lines if you have more fields, as long as they follow the same syntax as the first two lines here. These just check to ensure they're not empty, so validating on server-side.*/
   empty($_POST['contact-info']) ||
   empty($_POST['message']))
{
    $errors .= "\n Please fill out the required fields.";  /*Change the message if you want.*/
}
 
$name = $_POST['name'];  /*These lines are assigning new variables based on the information from the inputs. So what's in the name input becomes the new variable $name and so on. You can assign more or change the variable names here, as long as they match the commands below.*/
$contactinfo = $_POST['contact-info'];
$message = $_POST['message'];
 
if( empty($errors))
 
{
	$to = $myemail;
	$email_subject = "Contact from Website: $name";  /*This will appear in the subject line. Feel free to change the first part.*/
	$email_body = "$message";
	$headers = "From: $myemail\n";
	mail($to,$email_subject,$email_body,$headers);
	header('Location: ../About.html');  /*This is where the form will redirect on submit. You should have some kind of page saying thank you or something of that sort once they submit.*/
}
?>