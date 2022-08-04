<?php
$messege = '';
$messege .= '<h1>Заявка на письмо с сайта Boroda.website</h1>';
$messege .= '<p>Почта: '. $_POST['email'] . '</p>';


$to = '79602835254@yandex.ru'.',';
$spectext = '<!DOCTYPE HTML><html><head><title>Заявка на рассчет</title></head><body>';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'from: adm@boroda.website' . "\r\n";

$m = mail($to, 'заявка с сайта boroda.website', $spectext.$messege.'</body></html>', $headers);

if ($m) {echo 1;} else {echo 0;}

 ?>
