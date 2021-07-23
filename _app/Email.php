<?php

    namespace Notification;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class Email{

        private $mail = \stdClass::class;

        public function __construct()
        {
            $this->mail = new PHPMailer(true);
            $this->mail->SMTPDebug = 2;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = 'ricardosouza020387@gmail.com';                     //SMTP username
            $this->mail->Password   = 'zWYnas3H0VxSM29f';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $this->mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $this->mail->CharSet = "utf-8";
            $this->mail->setLanguage('br');
            $this->mail->isHTML(true);
            $this->mail->setFrom('ricardosouza020387@gmail.com', 'Equipe Ricardo Souza');
        }

        public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
        {
            $this->mail->Subject = (string)$subject;
            $this->mail->Body = $body;

            $this->mail->addReplyTo($replyEmail, $replyName);
            $this->mail->addAddress($addressEmail, $addressName);

            try{
                $this->mail->send();
            }catch (Exception $error){
                echo "Erro ao enviar o email: {$this->mail->ErrorInfo} {$error->getMessage()}";
            }
        }
    }