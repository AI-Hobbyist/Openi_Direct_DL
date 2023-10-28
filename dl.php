<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/include.php');
$repo = $_GET['repo'];
$file = $_GET['file'];
$uuid = get_uuid($api,$token,$repo,$file);
$url = $api.'/attachments/'.$uuid.'?access_token='.$token.'&type=0';
$dl_link = get_file($url);
if ($dl_link == false){
    http_response_code(404);
}else{
    header('Location: '.$dl_link, true, 302);
}