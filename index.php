<script src="scripts.js">//javascript on case-sensitive
</script>

<?php
echo "<div></div>";//siia vahele tuleb javascripti kellaaeg
    require "functions.php";
    require "components.php";
    $name = "Kaspar";
echo "$name,<br>";
    showTime();//näita aega funktsioon
//Tagasi koju ehk algusesse
home();
//tee menüü
menu($menu_begin,$menu_arr,$menu_end);

//kasutaja ip päring,funktsioon
getVisitorIp();
//counter funktsioon
counter();
?>
