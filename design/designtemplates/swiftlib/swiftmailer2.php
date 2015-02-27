<?php
//swiftmailer code
//echo $email;
$transporter = Swift_SmtpTransport::newInstance('secure.emailsrvr.com',465,'ssl')
        ->setUsername('noreply@infinitelinked.com')
        ->setPassword('M@nt!$bt');
    $transporter->setLocalDomain('[127.0.0.1]');
    $mailer = Swift_Mailer::newInstance($transporter);
	
//$mailer = Swift_Mailer::newInstance($smtp);
$message = Swift_Message::newInstance('Visit the given link to change your password');
$message
  ->setTo($email)
   // 'user2@example.org' => 'User Two',
    //'user3@exmaple.org' => 'Another User Name'
  
  ->setFrom(array('lina@infinitelinked.com' => 'Srustita'))
  ->setBody('hi user .. click on the below link to change your password..!!  <a target="_blank" href="http://localhost/projectprototype/cic/design/designtemplates/newpassword.php?email='.$encoded_email.'">
    http://localhost/projectprototype/cic/design/designtemplates/newpassword.php?email=

</a>','text/html'
  );

if ($mailer->send($message))
{
  echo "message sent!!";
  /* windows.location() */
}
else
{
  echo "Message could not be sent.";
}
?>