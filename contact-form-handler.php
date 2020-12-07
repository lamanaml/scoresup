<?php 
$errors = '';
$myemail = 'lamanaml@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['phone']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$phone = $_POST['phone']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
    $to = $myemail; 
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name : $name \n Email : $email_address \n Phone : $phone \n Message : $message"; 

    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    echo "Your Message successfully sent, we will get back to you ASAP.";
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
   

     <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-DM6BFSN3GB"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DM6BFSN3GB');
        </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Scores Up Financial Services</title>
        <link rel="canonical" href="https://www.scoresupfinancialservices.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Scores Up Financial can help you understand your credit and help improve your credit scores and financial health.."  />
        <meta name="author" content="Tiffany Melvin" /> 
        <meta property="og:site_name" content="Scores Up Financial Services"/>
        <meta property="og:title" content="Scores Up Financial Services"/>
        <meta property="og:url" content="https://www.scoresupfinancialservices.com"/>
        
        <meta property="og:type" content="website"/>
        
    <link rel="stylesheet" href="assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  type="image/png"  href="assets/images/1/fav.ico">
</head>

<body>
   <div class="container">
    
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

<a href="index.html">Back to the homepage </a>
<br>
  <img src="assets/images/1/logoTrans2.png">
</div>
</body>
</html>