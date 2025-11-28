<?php
echo "<h2>Ajafunktsioonid</h2>";
//timezone. juhul kui timezone ei ole
// määratud, siis php näitab localhost'i aeg
echo "<div class = 'flex-container'>";
echo "<div id='d1'>";
echo "<h3>Kuupäeva ja kellaaja funktsioonid</h3>";
date_default_timezone_set('Europe/Tallinn');
echo "<a href = 'https://www.php.net/manual/en/timezones.europe.php'>Timezones list</a>";
echo "<br>";
echo "time() - aeg sekundides - ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "<br>";
echo "date('d.m.Y H:i:s', time())";
echo "</div>";

echo "<div id='d2'>";
echo "<h3>Andmeformaadi andmete parsimine</h3>";
echo "date('d.m.Y H:i:s', time())";
echo "<pre> 
        d - päev 01...31
        m - kuu 01-12
        Y - aasta - nelja kohane arv
        G - 24h formaat
        i - minutid 0...59
        s - sekundid 0..59
        ";echo "</pre>";
echo "</div>";

echo "<div id='d3'>";
echo "<h3>Tehted kuupäevaga</h3>";
echo "+1 min = ".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1 tund = ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev = ".date("d.m.Y G:i:s", time()+60*60*24);
echo "<br>";
echo "</div>";

echo "<div id='d4'>";
echo "<h3>Kuupäeva genireerimine</h3>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
$synd=mktime(17,0,47,5,10,2008);
echo "<br> minu sünnipäev: ".date("d.m.Y G:i:s", $synd);
echo "</div>";

echo "<div id='d5'>";
echo "<h3>Massiivi kasutamine funktsioonidega</h3>";
echo "Massiivi abil näidata tänase kuu nimega";
echo "<br>";
$kuud=array(1=>"jaanuar","veebruar","märts","aprill","mai","juuni", "juuli", "august",
    "september", "oktoober","november", "december");
$aasta=date("Y");
$paev=date("d");
$kuu=$kuud[date("m")];
echo "Täna on: ".$paev.".".$kuu." ".$aasta." a.";
echo "</div>";
echo "</div>";
?>


