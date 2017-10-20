<?php

define('DOMAIN', 'meborobot.com');
define('MAILGUN_API', 'key-25ba115fe9ab609e02cc2e599a37173b');
define('SEND_TO', 'support@skyrockettoys.com');

function br2nl($string) {
	return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
}  

function mg_send($to, $subject, $message) {

	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_USERPWD, 'api:'.MAILGUN_API);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	$message = nl2br($message);
	$plain = strip_tags(br2nl($message));
	
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/'.DOMAIN.'/messages');
	curl_setopt($ch, CURLOPT_POSTFIELDS, array(
		'from' => $_POST['email'],
		'to' => $to,
		'subject' => $subject,
		'html' => $message,
		'text' => $plain
	));
	
	$exec = json_decode(curl_exec($ch));
	
	$info = curl_getinfo($ch);
	
	curl_close($ch);
	
	if ($info['http_code'] == 200) {
		return 1;  
	} else {
		return 0;
	}

}

$subject = 'Web Inquiry: '.$_POST['product'];

$message = '';
$message .= 'From: '.$_POST['fname'].' '.$_POST['lname'].'<br/>';
$message .= 'Email: '.$_POST['email'].'<br/>';
$message .= 'Phone: '.$_POST['phonenumber'].'<br/>';
$message .= 'Regarding: '.$_POST['product'].'<br/>';
$message .= '<br/>'.$_POST['message'].'<br/>';

echo mg_send(SEND_TO, $subject, $message);

?>