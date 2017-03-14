
<?php
require "functions.php";
home();

$month ="veebruar";
$test = array("kolmapäev","3.14",$month,8,"Klass nr A210");
print_r($test);
var_dump($test);
//esimene element test arrayst
echo "<br> $test[0]";
// lisame test arrayle elemendi
$test[]="uus, lisatud element";
    print_r($test);
    echo "<br>";

$test_a=array("esimene" => "Tauno","teine" => "Ragnar","kolmas" => "Kevin");
print_r($test_a);
//for tsükkel, hea tava on, et "i" on muutuja
//++ kasvatame 1 võrra. loop kuni test array elementide max arvuni
echo "<br><br> Array loopimine: <br>";
for ($i=0; $i<count($test);$i++){
    echo "<li>".$test[$i]."</li><br>";
}
echo "Sidusarray loopimine (associative array): <br>";
//sidusarray loopimiseks. "." on muutuja ja stringi liitmiseks -> String concatenation 
foreach($test_a as $jrk => $name){
    echo "<li>".$name." on järjekorras ".$jrk."</li><br>";
}
//mitmemõõtmelised massiivid- hinneteleht
$hinded = array("Peeter" => 
                array("Eesti keel"=>4,
                      "Matemaatika"=>4,
                      "Füüsika"=>3),
               "Mari"=>
                array("Eesti keel"=>5,
                      "Matemaatika"=>3,
                      "Füüsika"=>4),
               "Jüri"=>
                array("Eesti keel"=>3,
                      "Matemaatika"=>2,
                      "Füüsika"=>2)
               );

echo $hinded['Peeter']["Eesti keel"]."<br>";
//var_dump($hinded);
print_r(array_keys($hinded))."<br>";//print_r on massiivide väljatrükkimiseks. Key väärtused
print_r(array_values($hinded));//key values

//mitu rida meil on? tee massiiv
$hinded_id = array_keys($hinded);
for ($i=0;$i<count($hinded_id);$i++){
    echo $hinded_id[$i].":<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne){
        echo $aine." : ".$hinne."<br>";
    }
    echo "<br>";
}

?>  