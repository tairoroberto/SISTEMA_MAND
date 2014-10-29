<?php

function get_furl($url) {
    $furl = false;
// First check response headers
    $headers = get_headers($url);
// Test for 301 or 302
    if(preg_match('/^HTTP\/\d\.\d\s+(301|302)/',$headers[0])) {
        foreach($headers as $value) {
            if(substr(strtolower($value), 0, 9) == "location:") {
                $furl = trim(substr($value, 9, strlen($value)));
            }
        }
    }
// Set final URL
    $furl = ($furl) ? $furl : $url;
    return $furl;
}




 $url = get_furl('http://maps.googleapis.com/maps/api/staticmap?center=RUA%20JOSE%20LEAO%20DOS%20SANTOS%20,%2010%20SAO%20PAULO,br&zoom=16&size=1500x1200&markers=color%3ablue%7Clabel%3aS%7C11211|size:mid&sensor=false');
$ch = curl_init($url);
$fp = fopen('flower.jpg', 'wb');

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_FILE, $fp);
$contents = curl_exec($ch);
curl_close($ch);
//$fp = fopen($path_p.'/flower.png', 'wb');
echo $contents;
?>