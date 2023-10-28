<?php
function get_uuid($api, $token, $repo, $filename) {
    $url = $api.'/datasets/'.$repo.'/current_repo?access_token='.$token.'&type=0';
    $data = json_decode(get_data($url), true);
    $d = $data["data"][0]["attachments"];
    foreach ($d as $key => $value) {
        if (in_array($filename, $value)) {
            return $value['uuid'];
        }
    }
}