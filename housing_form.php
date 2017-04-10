<?php
  $to = 'Juslokinrnd3@Gmail.com';
  $subject = 'Housing Form test';
  $Landlord_Status = $_POST['Landlord'];
  $Tenant_Status = $_POST['Tenant'];
  $Email = $_POST['Email'];
  $email_from = 'Juslokinrnd3@Gmail.com';
  $email_subject = "New Form submission";
  $email_body =
  "Landlord Status: $Landlord_Status \n".
  "Tenant Status: $Tenant_Status \n"
  "Email: $Email \n"
  mail($to,$email_subject,$email_body);
?>
