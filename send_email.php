<?php
require_once "lib/class.phpmailer.php";
$post = (!empty($_POST)) ? true : false;
    if($post){
 		$name = stripslashes($_POST['inputName']);
        $email = stripslashes($_POST['inputEmail']);
        $text = stripslashes($_POST['text']);
        $captcha= stripslashes($_POST['captcha']);

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
        }
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
		
		
		
		if ($mail->Send()) {
			echo "Message Sent OK";
		} else {
			echo "Message Sent ERROR";
		}
		
		

?>