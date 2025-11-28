<form name ="muusika">
    <fieldset id="1"><legend><h2><strong>Muusika küsitlus</strong></h2></legend>

        <h3>1. Milliseid muusikuis/ansambleid sa tead?</h3>
        <input type="checkbox" id="FleetwoodMac" name="valik" value="FleetwoodMac" onchange="valikMuusika()">
        <label for="FleetwoodMac">Fleetwood Mac</label>
        <br>
        <input type="checkbox" id="TheWeeknd" name="valik" value="TheWeeknd" onchange="valikMuusika()">
        <label for="TheWeeknd">The Weeknd</label>
        <br>
        <input type="checkbox" id="ArcticMonkeys" name="valik" value="ArcticMonkeys" onchange="valikMuusika()">
        <label for="ArcticMonkeys">Arctic Monkeys</label>
        <br>
        <input type="checkbox" id="KISS" name="valik" value="KISS" onchange="valikMuusika()">
        <label for="KISS">KISS</label>
        <br>
        <input type="checkbox" id="ImagineDragons" name="valik" value="ImagineDragons" onchange="valikMuusika()">
        <label for="ImagineDragons">Imagine Dragons</label>
        <br> <br>
        <div id="vastus1"></div>

        <h3>2. Mida arvad muusika kuulamisest koolis?</h3>
        <label for="vas"></label>
        <textarea name="vas" id="vas" placeholder="Sinu arvamus ..."  oninput="arvamus()"></textarea>
        <br><br>
        <div id="vastus2"></div>

        <h3>3. Mitu tundi päevas sa kuulad muusikat?</h3>
        <label for="num"></label>
        <input type="number" id="num" name="num" min="0" max="24" oninput="tundiKuulad()">
        <br><br>
        <div id="vastus3"> </div>

        <h3>4. Kas sa kuulad raadiot?</h3>
        <input type="radio" name="vastus" id="jah" value="Jah" onchange="kuuladRaadiot()">
        <label for="jah">Jah</label>
        <input type="radio" name="vastus" id="ei" value="Ei" onchange="kuuladRaadiot()">
        <label for="ei">Ei</label>
        <br><br>
        <div id="vastus4"> </div>

        <h3>5. Milliseid raadiojaamu oskad nimetada?</h3>
        <label for="raadio"> </label>
        <input type="text" id="raadio" name="raadio" placeholder="BBC Radio 1, SomaFM ..." oninput="raadiojaamu()" >
        <br><br>
        <div id="vastus5"> </div>

        <h3>6. Millist muusikat sa kõige rohkem kuulad? </h3>
        <label for="still"> </label>
        <select id="still" name="still" onchange="stiil()">
            <option value="">Vali stiil</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
            <option value="Hip-Hop">Hip-Hop</option>
            <option value="Disko">Disko</option>
        </select>
        <br><br>
        <div id="vastus6"></div>
        <br>

        <input type="button" value= "Saada" onclick="saada()">
        <input type="button" value="Puhasta" onclick="puhasta()">
    </fieldset>
</form>
<form name="vastused">
    <fieldset id="2"><legend><h2><strong>Vastused</strong></h2></legend>
        <div id="vastused"> </div>
    </fieldset>
</form>

