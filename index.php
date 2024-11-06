<?php
    require'PHPMailer/class.phpmailer.php';

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

                $mail = new PHPMailer(true);

                $mail->IsSMTP();
                $mail->SMTPAuth = false;
                $mail->Port     = 25;
                $mail->Host     = "localhost";
                $mail->Username = "keobangsy@kdev11.com";
                $mail->Password = "04031980Aa$";
                
                $mail->IsSendmail();

                $mail->From      = "keobangsy@kdev11.com";
                $mail->FromName  = "kdev11.com";

                $mail->AddAddress($email);

                $mail->Subject   = "Thank you for contacting me";
                $mail->WordWrap  = 90;

                $body = $name. "Thank You For Contacting Us";

                $mail->MsgHTML($body);
                $mail->IsHTML(true);
                $mail->Send();



                echo '<script language="javascript">';
                echo 'alert("Thank You Contacting Us We will Response You As")';
                echo '</script>';
                echo "<script>setTimeout(\"location.href = 'contact_us.php';\",00);</script>";

    }else {
        echo '<script language="javascript">';
        echo 'alert("Something wrong.")';
        echo '</script>';
        echo "<script>setTimeout(\"location.href = 'contact_us.php';\",00);</script>";
    }

?>