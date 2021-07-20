<?php
$mobileno=$_POST['mno'];
$msg=$_POST['msg'];

require_once __DIR__.'/vendor/autoload.php';
$messagebird = new MessageBird\Client('VFYt9BR5BnLNFwWI8pzp0WxX8');
$message = new MessageBird\Objects\Message;
$message->originator = '+9953908559';
$message->recipients = [ '+919953908559' ];
$message->body = "$msg";
$response = $messagebird->messages->create($message);
print_r(json_encode($response));