<?php  
    require 'PHPMailerAutoload.php'; 
    $mail = new PHPMailer;
    $C_name=$_POST['name'];  
    $C_email=$_POST['email'];  
    $C_tel=$_POST['phone'];  
    $C_message=$_POST['msg']; 
    $C_message=nl2br($C_message);
     
    $mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'baudio.com.tw';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'captu@baudio.com.tw';                 // SMTP username
		$mail->Password = 'r4ash6yxq';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->From = 'baudio@baudio.com.tw';
		$mail->FromName = 'BAUDIO';
		$mail->CharSet = "utf-8";         
		$mail->addAddress('baudio@baudio.com.tw');
		$mail->addAddress('captu@baudio.com.tw');
		/*$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
		$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('info@example.com', 'Information');
		$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');*/

		/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');*/    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject ="來自 ".$C_name." 留言"; //郵件標題  
		$mail->Body = "姓名：".$C_name."<br />信箱：".$C_email."<br />電話：".$C_tel."<br />內容：<br />".$C_message; //郵件內容
		//$mail->AltBody = "姓名:".$C_name."/n信箱:".$C_email."/n電話:".$C_tel."/n回應內容:".$C_message; //郵件內容

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Message has been sent';
		}
?>