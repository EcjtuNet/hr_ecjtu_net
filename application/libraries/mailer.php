<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Mailer {
 
    var $mail;
 
    public function __construct()
    {
        require_once('PHPMailer_5.2.0/class.phpmailer.php');
        //require_once('PHPMailer_5.2.1/class.');
 
        // the true param means it will throw exceptions on errors, which we need to catch
        $this->mail = new PHPMailer(true);
 
        $this->mail->IsSMTP(); // telling the class to use SMTP
 
        $this->mail->CharSet = "utf-8";                  // 一定要設定 CharSet 才能正確處理中文
        $this->mail->Encoding = 'base64';//此处建议用b64转码，目前大部分邮件网关，发送的信息都是用这种方式
 
        $this->mail->SMTPDebug  = 0;                     // enables SMTP debug information
        $this->mail->SMTPAuth   = true;                  // enable SMTP authentication
        //$this->mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $this->mail->Host       = "smtp.qq.com";      // sets GMAIL as the SMTP server
        $this->mail->Port       = 25;                   // set the SMTP port for the GMAIL server
        $this->mail->Username   = "634647220@qq.com";// GMAIL username
        $this->mail->Password   = "77b88z1314f";       // GMAIL password
        //$this->mail->form       = "15270858731@163.com";
        $this->mail->AddReplyTo('634647220@qq.com', 'zzx');
        $this->mail->SetFrom('634647220@qq.com', 'zzx');
    }
 
    public function sendmail($to, $to_name, $subject, $body){
        try{
            $this->mail->AddAddress($to, $to_name);
 
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
 
            $this->mail->Send();
                echo "Message Sent OK</p>n";
 
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }
}
 
/* End of file mailer.php */
 