<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/src/PHPMailer.php";
require "./PHPMailer/src/SMTP.php";
require "./PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);

try {

    // 서버세팅
    $mail -> SMTPDebug = 2;    // 디버깅 설정
    $mail -> isSMTP();        // SMTP 사용 설정

    $mail -> Host = "smtp.gmail.com";                // email 보낼때 사용할 서버를 지정
    $mail -> SMTPAuth = true;                        // SMTP 인증을 사용함
    $mail -> Username = "salesbadvisior@gmail.com";    // 메일 계정
    $mail -> Password = "dddd1234!!";                // 메일 비밀번호
    $mail -> SMTPSecure = "ssl";                    // SSL을 사용함
    $mail -> Port = 465;                            // email 보낼때 사용할 포트를 지정
    $mail -> CharSet = "utf-8";                        // 문자셋 인코딩

    // 보내는 메일
    $mail -> setFrom("salesbadvisior@gmail.com", "mailSendedByEunchae");

    // 받는 메일
    // $mailaddress =$_SERVER['argv'];
    echo '받을 메일주소를 입력하세요 ';
    $input = fgets(STDIN);
    $mail -> addAddress($input, "receiver");
    
    // 첨부파일
    // $mail -> addAttachment("./test.zip");
    // $mail -> addAttachment("./anjihyn.jpg");

    // 메일 내용
    $mail -> isHTML(true); 
    echo '전송할 제목을 입력하세요 ';
    $subject = fgets(STDIN);     
    echo '전송할 내용을 입력하세요 ';
    $body = fgets(STDIN);                                           // HTML 태그 사용 여부
    $mail -> Subject = $subject ;              // 메일 제목
    $mail -> Body =  $body;    // 메일 내용

    // Gmail로 메일을 발송하기 위해서는 CA인증이 필요하다.
    // CA 인증을 받지 못한 경우에는 아래 설정하여 인증체크를 해지하여야 한다.
    $mail -> SMTPOptions = array(
        "ssl" => array(
              "verify_peer" => false
            , "verify_peer_name" => false
            , "allow_self_signed" => true
        )
    );
    
    // 메일 전송
    $mail -> send();
    
    echo "Message has been sent";

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error : ", $mail -> ErrorInfo;
}
?>
