<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Oleksandra PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/muusikaStyle.css">
    <link rel="stylesheet" href="style/objekt.css">
    <link rel="stylesheet" href="style/ajaFunktsStyle.css">
    <script src="js/jsMuusika.js"></script>
    <script src="js/jsNupp.js"></script>
</head>
<body>
<?php
//päis
include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class = "flex-container">
    <div>
        <?php
        if(isset($_GET["link"])){
            include('content/'.$_GET["link"]);
        } else{
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/tthk_logo.png" alt="pilt vabal valikul">
        <h2>Kuupäev ja aja</h2>
        <input type="button"  id="button_1" value="Täna on"  onclick="tana()">
        <br>
        <input type="button" id="but1" value="Minu sünnipäev on" onclick="sunnipaev()">
        <div id="tulemus"></div>
    </div>
</div>

<?php
//jalus
include("footer.php");
?>
<script src="js/jsObjekt.js"></script>
</body>
</html>
