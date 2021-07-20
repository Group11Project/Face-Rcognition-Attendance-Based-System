<?php
$mobileno=$_POST['mno'];
$msg=$_POST['msg'];

require_once __DIR__.'/vendor/autoload.php';
$messagebird = new MessageBird\Client('G0avSgtlIYp96YISRA4JdC2Hl');
$message = new MessageBird\Objects\Message;
$message->originator = '+918447634512';
$message->recipients = [ '+918447634512' ];
$message->body = "$msg";
$response = $messagebird->messages->create($message);
//print_r(json_encode($response));
?>
<?php header("Location: sms.php"); ?>