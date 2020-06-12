<?php

include_once('config.php');

$ip = $_GET['ip'];
$port = $_GET['port'];
$community = $_GET['community'];
$version = $_GET['version'];

if(empty($ip) || empty($port)||empty($community) || empty($version)) {
    echo "Device not added";
}

else {
    $result = $db->query('SELECT * FROM switches');
    $c = 0;
    foreach ($result as $result) {
        if($result['ip']==$ip && $result['port']==$port && $result['community']==$community && $result['version']==$version){
            $c = $c+1;
        }
    }

    if ($c ==0){
        $db->exec("INSERT INTO switches (ip,port,community,version) VALUES ('$ip','$port','$community','$version')");
        echo "ok, device added sucessfully";
    }
    else {
        echo "Device not added";
    }
}

$db->close();

?>
