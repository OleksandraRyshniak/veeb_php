<?php
function clearVarsExcept($url, $varname){
    $url =basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, '?')."?$varname=".$_REQUEST[$varname];
}
echo "<div class = 'flex-container'>";
echo "<div>";
echo "<h2>Matemaatilise tehted</h2>";
$arv1 = 1.231;
$arv2 = 2.285;
echo "Esimene arv on ".$arv1." Teine arv on ".$arv2."<br>";
echo "'+'  Liitmise tulemus: ".($arv1+$arv2);
echo "<br>";
echo "'-'  Lahutamise tulemus: ".($arv1-$arv2);
echo "<br>";
echo "'*'  Korrutise tulemus: ".($arv1*$arv2);
echo "<br>";
echo "'/'  Jagatise tulemus: ".($arv1/$arv2);
echo "<br>";
echo "<br>";
echo "</div>";
echo "<div>";
echo "<h2>Matemaatilised funktsioonid</h2>";
echo "'min()'  Väiksem arv: ".min($arv1, $arv2);
echo "<br>";
echo "'max()'  Suurem arv: ".max($arv1, $arv2);
echo "<br>";
echo "'round(arv)'  Ümardamine täisarvani: ".round($arv1);
echo "<br>";
echo "'ceil(arv)'  Ümardab jargmise arvuni: ".ceil($arv1);
echo "<br>";
echo "'floor(arv)'  Ümardab allapoole täisarvani: ".floor($arv1);
echo "<br>";
echo "'round(arv, 1)'  Ümardab ühe komma kohtani: ".round($arv1, 1);
echo "<br>";
echo "'rand()'  Juhuslik arv: ".rand(1,100);
echo "<br>";
echo "'pow(arv, 2)'  Astendamine: ".pow($arv1, 2);
echo "<br>";
echo "'sqrt(arv)'  Ruutjuurt: ".sqrt($arv2);
echo "<br>";
echo "'pi()'  Pi: ".pi();
echo "<br>";
echo "</div>";
echo "<div>";
echo "<h2>Omistamise operaatorid</h2>";
$x = 10;
$y = 20;
echo "Suurendamine ühe võrra: ";
$x++; //$x = $x+1
echo $x;
echo "<br>";
echo "Vahendamine ühe võrra: ";
$x--;
echo $x;
echo "<br>";
$x*=$y; //$x = $x*$y
echo $x;
echo "<br>";
$x/=$y;
echo $x; //$x = $x/$y
echo "<br>";

$nimi = "sasha";
$perenimi = "ryshniak";
//$nimi .= $perenimi;
echo $nimi;
echo "<br>";
$format ='Tere, %s %s; arv x: %d';
printf($format,$nimi, $perenimi, $x );
echo "<br>";
echo "</div>";
echo "<div>";
echo "<h3>Arv mõistatus, arva ära 2 arvu(1-20)</h2>";
$arv3 = 8;
$arv4 = 3;
echo "<ol><li>"."Kui need kaka arvu korrutada, saame: ".($arv3*$arv4)."</li>";
echo "<li>"."Kui tõsta esimene arv juure alla, siis saadakse: ".sqrt($arv3)."</li>";
echo "<li>"."Kui tõsta teine arv juure alla, siis saadakse: ".sqrt($arv4)."</li>";
echo "<li>"."Kui need kaks arvu kokku liita ja üks lahutada, saadakse: ".($arv3+$arv4-1)."</li>";
echo "<li>"."Kui lahutada teine arv esimesest ja korrutada kahega, saadakse:".(($arv3-$arv4)*2)."</li>";
echo "</ol>";
?>
<form name="matem_funktsioonid" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
    <label for="arv3">Sisesta esimene arv: </label>
    <input type="number" id="arv3" name="arv3" min="1" max="20">
    <br><br>
    <label for="arv4">Sisesta teine arv: </label>
    <input type="number" id="arv4" name="arv4" min="1" max="20">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST['arv3']) && isset($_REQUEST['arv4'])){
    if($_REQUEST['arv3']== $arv3 && $_REQUEST['arv4']== $arv4){
        echo "Esimene arv: ".$_REQUEST['arv3']." on õige!";
        echo "<br>";
        echo "Teine arv: ".$_REQUEST['arv4']." on õige!";
    }else if($_REQUEST['arv3']== $arv3 && $_REQUEST['arv4']!== $arv4){
        echo "Esimene arv: ".$_REQUEST['arv3']." on õige!";
        echo "<br>";
        echo "Teine arv: ".$_REQUEST['arv4']." on vale!";
    }else if($_REQUEST['arv3']!== $arv3 && $_REQUEST['arv4']== $arv4){
        echo "Esimene arv: ".$_REQUEST['arv3']." on vale!";
        echo "<br>";
        echo "Teine arv: ".$_REQUEST['arv4']." on õige!";
    }
    else{
        echo "Esimene arv: ".$_REQUEST['arv3']." on vale!";
        echo "<br>";
        echo "Teine arv: ".$_REQUEST['arv4']." on vale!";
    }
}
echo "</div>";
echo "</div>";
?>

