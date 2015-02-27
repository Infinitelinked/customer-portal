<?php
//swiftmailer code
//echo $email;
$transporter = Swift_SmtpTransport::newInstance('secure.emailsrvr.com',465,'ssl')
        ->setUsername('noreply@infinitelinked.com')
        ->setPassword('M@nt!$bt');
    $transporter->setLocalDomain('[127.0.0.1]');
    $mailer = Swift_Mailer::newInstance($transporter);
	
//$mailer = Swift_Mailer::newInstance($smtp);
$message = Swift_Message::newInstance('successfully, you register...!!!, you can login by username password...!!!');
$message
  ->setTo($email)
   // 'user2@example.org' => 'User Two',
    //'user3@exmaple.org' => 'Another User Name'
  
  ->setFrom(array('lina@infinitelinked.com' => 'Srustita'))
  /* ->setBody('hi user .. you have registered in ILS successfully .. to make your registration complete click on the below link to create password..!!  http://localhost/projectprototype/cic/design/designtemplates/crtpwd.php?email='.$email,'text/html'
  ); */
  /* ->setBody(
    '<html>' .
    ' <head></head>' .
    ' <body>' .
    '  Welcome to my site. To complete registration, please click activate below' .
    '  <a href="http://localhost/projectprototype/cic/design/designtemplates/crtpwd.php?email'. $email .' "> ' .
    ' </body>' .
    '</html>',
    'text/html'
	); */
	->setBody('hi user .. you have registered in ILS successfully .. to make your registration complete click on the below link to create password..!!  <a target="_blank" href="http://localhost/projectprototype/cic/design/designtemplates/crtpwd.php?email='.$encoded_email.'">

    http://localhost/projectprototype/cic/design/designtemplates/crtpwd.php?email=

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