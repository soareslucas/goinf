<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

/*     require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';     */    


    require_once "vendor/autoload.php";

    //PHPMailer Object
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions



    //Enable SMTP debugging.
    $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "goinf.ti@gmail.com";                 
    $mail->Password = "Lucas-0601";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to
    $mail->Port = 587;                                   

    $mail->addReplyTo($_POST['email'], $_POST['nome']);
    
    //To address and name
    $mail->addAddress("goinf.ti@gmail.com"); //Recipient name is optional

    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['nome'];


    //Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = $_POST['assunto'];
    $mail->Body = $_POST['mensagem'].'<br> Telefone: '.$_POST['telefone'].'<br> Email: '.$_POST['email'];

    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


?>