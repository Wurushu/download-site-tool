<?php
    $url = $_GET['url'];

    $curl = curl_init($url);
    curl_exec($curl);
    curl_close($curl);