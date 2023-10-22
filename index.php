<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/include.php');
$uuid = $_GET['uuid'];
$url = $api.'/v1/attachments/'.$uuid.'?access_token='.$token.'&type=0';
$dl_link = get_file($url);
if ($dl_link == false){
    http_response_code(404);
}else{
    header('Location: '.$dl_link, true, 302);
}