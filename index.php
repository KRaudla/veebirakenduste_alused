<?php
    require "functions.php";
    require "components.php";
    $name = "Kaspar";
//üherealine kommentaar
/*kommentaar
mitmel
real
*/
echo "$name,<br>";//teksti sees saab kasutada täpitähti.
    showTime();
/*echo "täpitähed<br>";//reavahetuse tag, mis parsitakse klienti pool browseris
echo "<b>$name kolmas rida Boldis </b>"; //rida peab lõppema semikooloniga
*/   
//Tagasi koju ehk algusesse
home();

$menu_begin = "<div>";
$menu_arr=array("array","tips");
$menu_end="</div>";
//tee menüü
menu($menu_begin,$menu_arr,$menu_end);

//kasutaja ip päring
getVisitorIp()
?>