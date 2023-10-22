<?php
function get_file($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    preg_match('/location: (.*)\r\n/', $response, $matches);
    if (isset($matches[1])) {
        return $matches[1];
    } else {
        return false;
    }
}
?>