<?php

    $username = "ubkpluso_odt";
    $password = "KoalaPanda123";
    $url = "vps.ubkplus.info:3306";
    $database = "ubkpluso_plp_bahasa";

    $con = mysqli_connect($url, $username, $password, $database);

    if($con){
        echo 'connected to database';
    }else{
        echo 'server unreachable';
    }