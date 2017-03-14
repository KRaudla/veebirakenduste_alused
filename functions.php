<?php

function showTime(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");//H 24 formaat, h 12 tunni formaat, i minut, kuna m juba reserveeritud
    echo "kell on $time <br>";
    if ($time>=17){
        echo "Aeg on koju minna!<br>";
    }else{
        echo "Pead veel kannatama!<br>";    
    }    
}

function home(){
    echo '<li><a href="index.php">Tagasi koju</a></li>';
}

function getVisitorIp(){
    $ip = $_SERVER['REMOTE_ADDR'];//see on globaalne muutuja, defineeritud süsteemi poolt vt Tips var_dumpi
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $time = date("H:i:s");
    $visitor = $ip." : ".$time; //anname külastajale väärtuse
    $file = fopen("visitor.txt","a") or die("Ei saanud avada");//kui avada ei saa, siis sulge
    // kui fail avanes
    fwrite($file,$visitor."\n");
        echo "Külastate saiti aadressilt --->".$ip."<br>";
        echo "Teie User-Agent on ---> ".$agent;
    fclose($file);
    
}
?>