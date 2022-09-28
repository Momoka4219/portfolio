<?php
$name = $_POST['name'];
$country = $_POST['country'];
$message = $_POST['message'];


$email_subject = "New Message from Momoka site";

$email_body = "From Name: $name.\n"."Country: $country.\n"."Message: $message.\n";

$to = "one.momo421@gmail.com";


if($name == 'Henryglasp'){
    
?>
 <script language="javascript">
    alert("something went wrong");
    location.href = "contact.html";
</script> 

<?php
    
}

else{
    
$result = mail($to, $email_subject,$email_body);
if(!$result) {  

/* heading to error page */

header("Location:error_page.html");
exit();

}


/*?>
<!-- <script language="javascript">
    alert("something went wrong");
    location.href = "contact.html";
</script> 

<php? -->



/* Make sure that code below does not get executed when we redirect. */

  
else {

header("Location:success_page.html");

}
}
?>