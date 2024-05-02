<?php

while(true)
{
    sleep(60); // sleep for 60 sec = 1 minute

    $s = curl_init();

    $your_php_url_to_cron = 'http://rotaapp.local/sys/app/jobs/index.php';
    curl_setopt($s,CURLOPT_URL, $your_php_url_to_cron); 
    curl_exec($s); 
    curl_getinfo($s,CURLINFO_HTTP_CODE); 
    curl_close($s);
}

