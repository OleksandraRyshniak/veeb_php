function valikMuusika() {
    let v1=document.getElementById("vastus1");
    let fm =document.getElementById("FleetwoodMac");
    let tw=document.getElementById("TheWeeknd");
    let am=document.getElementById("ArcticMonkeys");
    let k=document.getElementById("KISS");
    let im=document.getElementById("ImagineDragons");

    let valik="";
    if (fm.checked) {valik+=fm.value +  ", "; }
    if (tw.checked) {valik+=tw.value +  ", ";}
    if (am.checked) {valik+=am.value + ", ";}
    if (k.checked) {valik+=k.value + ", ";}
    if (im.checked) {valik+=im.value + ", ";}
    v1.innerHTML="<strong>Sa valisid:</strong> " + valik;
}

function arvamus() {
    let v2=document.getElementById("vastus2");
    let text=document.getElementById("vas")

    v2.innerHTML="<strong>Sa arvamus: </strong>" + text.value;
}

function  tundiKuulad(){
    let v3=document.getElementById("vastus3");
    let num=document.getElementById("num");

    v3.innerHTML="Sa kuulad muusikat " +"<strong>"+num.value+"</strong>" + " tundi pأ¤evas";
}

function kuuladRaadiot(){
    let v4=document.getElementById("vastus4");
    let jah=document.getElementById("jah");
    let ei =document.getElementById("ei");

    if (jah.checked) {v4.innerHTML="<strong>Raadio kuulamine:</strong> " + jah.value;}
    if (ei.checked) {v4.innerHTML="<strong>Raadio kuulamine: </strong>" + ei.value;}
}

function raadiojaamu(){
    let v5=document.getElementById("vastus5");
    let raadio=document.getElementById("raadio");

    v5.innerHTML="<strong>Sinu nimetatud jaamad: </strong>" + raadio.value;
}

function  stiil(){
    let v6=document.getElementById("vastus6");
    let still=document.getElementById("still");

    if(still.selectedIndex !== 0){
        v6.innerHTML="<strong>Sinu vastus: </strong>" + still.value;
    }
    else{
        v6.innerHTML="<i>Tee ripploendi lahti ja vali!</i> ";
    }
}

function saada(){
    let vastused=document.getElementById("vastused");
    let v1=document.getElementById("vastus1").innerHTML;
    let v2=document.getElementById("vastus2").innerHTML;
    let v3=document.getElementById("vastus3").innerHTML;
    let v4=document.getElementById("vastus4").innerHTML;
    let v5=document.getElementById("vastus5").innerHTML;
    let v6=document.getElementById("vastus6").innerHTML;

    vastused.innerHTML= v1+"<br>"+v2+"<br>"+v3+"<br>"+v4+"<br>"+v5+"<br>"+v6;
}

function puhasta(){
    let v1= document.getElementById("vastus1");
    let fm =document.getElementById("FleetwoodMac");
    let tw=document.getElementById("TheWeeknd");
    let am=document.getElementById("ArcticMonkeys");
    let k=document.getElementById("KISS");
    let im=document.getElementById("ImagineDragons");
    v1.innerHTML="";
    fm.checked=false;
    tw.checked=false;
    am.checked=false;
    k.checked=false;
    im.checked=false;

    let v2= document.getElementById("vastus2");
    let text=document.getElementById("vas");
    v2.innerHTML="";
    text.value="";

    let v3= document.getElementById("vastus3");
    let num=document.getElementById("num");
    v3.innerHTML="";
    num.value="";

    let v4= document.getElementById("vastus4");
    let jah=document.getElementById("jah");
    let ei =document.getElementById("ei");
    v4.innerHTML="";
    jah.checked=false;
    ei.checked=false;

    let v5= document.getElementById("vastus5");
    let raadio=document.getElementById("raadio");
    v5.innerHTML="";
    raadio.value="";

    let v6= document.getElementById("vastus6");
    let still=document.getElementById("still");
    v6.innerHTML="";
    still.value="";

    let vastused=document.getElementById("vastused");
    vastused.innerHTML="";
}