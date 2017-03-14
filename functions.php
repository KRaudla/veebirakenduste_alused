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
        echo "Teie User-Agent on ---> ".$agent."<br>";
    fclose($file);

}
function counter(){//loome counteri
    $file_name = "count.txt";
    if (!file_exists($file_name)){
      $file = fopen($file_name,"w") or die("Can´t open");
      $count = 1;//algväärtus
      fwrite($file,$count);
      echo "Õnnitleme, olete külastaja nr ".$count;
      fclose($file);
    }else{
      $file = fopen($file_name,"r+") or die("Can´t open");//read ainult loeb, r+ annab ka lugemisõiguse juurde
      $count =file_get_contents($file_name)+1;
      fwrite($file,$count);
      echo "Olete külastaja nr ".$count;
      fclose($file);
    }

}
?>
