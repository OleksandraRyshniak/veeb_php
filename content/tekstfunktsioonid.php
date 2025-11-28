<?php
function clearVarsExcept($url, $varname){
    $url =basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, '?')."?$varname=".$_REQUEST[$varname];
}
echo "<div class = 'flex-container'>";
echo "<div id='d1'>";
echo "<h2>Tekst funktsioonid</h2>";
$tekst='PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus - strlen() = ".strlen($tekst). "tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte - substr() = ".substr($tekst, 0,6);
echo "<br>";
echo "Alates 6 tähest = ".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses - str_word_count() = ".str_word_count($tekst). "sõna lauses";
echo "<br>";
echo "Kõik tähed on suured- strtoupper() = ".strtoupper($tekst);
echo "<br>";
echo "Kõik tähed on väikesed - strtolower() = ".strtolower($tekst);
echo "<br>";
echo "Iga sõnad alga suure tähega - ucwords() = ".ucwords($tekst);
echo "<br>";
echo "Iga sõnad alga suure tähega ja kõik tähed on väikesed - ucwords(strtolower())= ".ucwords(strtolower($tekst));
$tekst2='         PHP on skriptikeel serveripoolne          ';
//trim. ltrim, rtrim
echo "<br>";
echo "|".$tekst2."|";
echo "<br>";
echo "Eemaldab tekstist tühikuid paremalt ja vasakult - trim() ".trim($tekst2);
echo "<br>";
echo "Eemaldab tekstist tühikuid vasakult - ltrim()".ltrim($tekst);
echo "<br>";
echo "Eemaldab tekstist tühikuid paremalt - rtrim()".rtrim($tekst);
echo "<br>";
echo "</div>";
echo "<div id='d2'>";
echo "<h3>Tekst kui massiiv</h3>";
echo "1. täht massiivist - ".$tekst[0];
echo "<br>";
echo "5. täht massiivist - ".$tekst[4];
echo "<br>";
//määrab iga sõna nagu eraldi element
print_r(str_word_count($tekst, 1));//Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
$syna = str_word_count($tekst, 1);
echo "<br>";
echo "massivist 3 sõna ".$syna[2];
echo "<br>";
//määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst, 2));//Array ( [0] => PHP [4] => on [7] => skriptikeel [19] => serveripoolne );
echo "<br>";
echo "</div>";
echo "<div id='d3'>";
echo "<h2>Teksti asendamine - replace</h2>";
$asendus='JavaScript';
echo substr_replace($tekst, $asendus, 0, 3);
echo "<br>";
//ise vaheta serveripoolne - kliendipoolne
$klient='kliendipoolne';
echo substr_replace($tekst, $klient, 19, 13);
echo "<br>";
$otsi = array('PHP', 'serveripoolne');
$asendav = array('JavaScript', 'kliendipoolne');
echo str_replace($otsi, $asendav, $tekst);
echo "<br>";
echo "</div>";
echo "<div id='d4'>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
// tee 5-6 tekstfunktsiooni mis aitavad aru saada miline linnanimi oli.
$linn = "Tallinn";
echo "<ol><li>"."Linna esimene täht on ".substr($linn, 0, 1). ".";
echo "<li>"."Selle linna nimi koosneb ".strlen($linn). " tähest.";
echo "<li>"."Linna viimane täht on ".substr($linn, 6, 1). ".";
$lin = "Vanalinn asub Tallinn";
$linnaga = array( 'Tallinn');
$linna = array('*******');
echo "<li>".str_replace($linnaga, $linna, $lin);
$sym= array ('ll');
$sum = array('rt');
echo "<li>".str_replace($sym, $sum, $linn)."</li></ol>";
?>
<form name="tekstkontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
    <label for="linn">Sisesta linnanimi: </label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST['linn'])){
    if(ucwords($_REQUEST['linn'])=='Tallinn'){
        echo ucwords($_REQUEST['linn'])." on õige!";
    }
    else{
        echo ucwords($_REQUEST['linn'])." on vale!";
    }
}
echo "</div>";
echo "</div>";
?>




