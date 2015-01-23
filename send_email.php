<?php
require_once "./lib/class.phpmailer.php";
include_once "./securimage/securimage.php";
$securimage = new Securimage();

$post = (!empty($_POST)) ? true : false;


    if($post){

    	if ($securimage->check($_POST['captcha_code']) == true) {
// the code was incorrect
// you should handle the error so that the form processor doesn't continue
// or you can use the following code if there is no validation or you do not know how




 		$name = stripslashes($_POST['inputName']);
        $email = stripslashes($_POST['inputEmail']);
        $text = stripslashes($_POST['text']);
    	

        $msg = '
            <html>
                    <head>
                            <title>Заявка</title>
                    </head>
                    <body>
                            <p>Имя: '.$name.'</p>
                            <p>Email : '.$email.'</p>
                            <p>Сообщение : '.$text.'</p>
                    </body>
            </html>';
	
    		$mail = new PHPMailer(true);	/* using PHPMailer */
			$mail->IsSMTP();
			
			$mail->Host 		= "smtp.gmail.com";
			$mail->SMTPAuth 	= true;
			$mail->SMTPSecure	= "ssl";
			$mail->Port			= 465;
			$mail->CharSet		= 'UTF-8';
			
			$mail->Username		= "xom94ok@gmail.com";
			$mail->Password 	= "BezXynt11";
			$mail->SetFrom('xom94ok@gmail.com', 'Форма обратной связи');
			$mail->Subject		= 'Форма обратной связи';
			$mail->MsgHTML($msg);
			$address = "it-fixed@ya.ru";
			$mail->AddAddress($address, "Ермаков Сергей");
			if(!$mail->Send()) {
			  echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			  echo "Message sent!";
			}
		}else{
	echo "The security code entered was incorrect.<br /><br />";
	echo "Please go <a href='http://it-fixed.ru/contactform.php'>back</a> and try again.";
}
	};	


?>