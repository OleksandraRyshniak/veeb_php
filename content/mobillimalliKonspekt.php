<?php
echo "<h1>Mobillimalli järgi veebilehestik</h1>";
echo "<strong>Ülesanne: </strong>";
echo "luua mobiilimalli stiilis kujundatud anekdootide veebileht.";
echo "<br>";
echo "<br>";
echo "<strong>Objektid: </strong>";
echo "<ol><li>Navigeerimismenüü</li>";
echo "<li>Header</li>";
echo "<li>Anekdoodi plokk</li>";
echo "<li>Footer</li>";
echo "</ol>";
?>

<h2>Navigeerimismenüü</h2>
<p>See on lehe ülaosas asuv menüü kolme anekdoodi linkidega.</p>
<pre>
&lt;div id="header"&gt;
    &lt;div class="nav"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="esimene.php"&gt;Hilinemise põhjus&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="teine.php"&gt;Doktori soovitus&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="kolmas.php"&gt;Arvutihiire mõistatus&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<div class="image">
    <img src="" alt="Navigeerimismenüü">
</div>

<h2>Footer</h2>
<p>See on plokk, mis kuvab autori nime — Oleksandra Ryshniak.</p>
<pre>
&lt;footer&gt;
    Oleksandra Ryshniak
    &lt;/footer&gt;
</pre>
<div class="image">
    <img src="" alt="Footer">
</div>

<h2>Header ja Anekdoodi plokk</h2>
<ol>
    <li>Lisab lehele faili menu.php, kus asub navigeerimismenüü -
        <pre>&lt;?php require("menu.php");?&gt;</pre></li>
    <li>Lehe pealkiri – anekdoodi nimi -
        <pre>&lt;h2>Hilinemise põhjus&lt;/h2&gt;</pre></li>
    <li>Lisab lehele faili anekdoot1.txt sisu.
        See tähendab, et anekdoot hoitakse eraldi tekstifailis
        ja PHP kuvab selle lehel.
        <pre>&lt;p&gt;&lt;?php require("anekdoot1.txt");?&gt;&lt;/p>
        </pre></li>
    <li>Lisab lehe jaluse (footer), näiteks autori nime või muu lisainfo -
        <pre>&lt;?php require("anekdoot_footer.php"); ?&gt;</pre>
    </li>
</ol>
<pre>&lt;?php require("menu.php");?&gt;
&lt;h2>Hilinemise põhjus&lt;/h2&gt;
&lt;p&gt;
    &lt;?php
    require("anekdoot1.txt");
    ?&gt;
&lt;/p>
&lt;?php require("anekdoot_footer.php"); ?&gt;
</pre>
<div class="image">
    <img src="" alt="Header ja Anekdoodi plokk">
</div>

<h2>Kogu lehe vaade</h2>
<img src="" alt="Kogu lehe vaade">


