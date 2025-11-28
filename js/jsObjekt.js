let raamat = {
    pealkiri: "1984",
    autor: "George Orwell",
    aasta: 1949,
    kirjastus: "Secker and Warburg",
    zanr:  "Sotsiaalne draama"
};

//1.1. Lisa meetod, mis kuvab raamatu kirjelduse.
//console.log(raamat);
//let tulemus = document.getElementById("tulemus");
//tulemus.innerHTML = "<b>Pealkiri: </b>" + raamat.pealkiri + "<br>"+
// "<b>Autor: </b>" + raamat.autor + "<br>"+
// "<b>Aasta: </b>" + raamat.aasta + "<br>"+
//"<b>Kirjastus: </b>" + raamat.kirjastus + "<br>"+
//"<b>إ½anr: </b>" + raamat.zanr + "<br>";

//1.2.Lisa meetod, mis muudab vأ¤ljaandmise aastat ja prindi tulemused konsooli.
let tulemus1 = document.getElementById("tulemus1");
raamat.aasta = 1950;
console.log("Uus vأ¤ljaandmise aasta:", raamat.aasta);
tulemus1.innerHTML = "<b>Pealkiri: </b>" + raamat.pealkiri + "<br>"+
    "<b>Autor: </b>" + raamat.autor + "<br>"+
    "<b>Aasta: </b>" + raamat.aasta + "<br>"+
    "<b>Kirjastus: </b>" + raamat.kirjastus + "<br>"+
    "<b>إ½anr: </b>" + raamat.zanr + "<br>";

//2.1.Loo objekt raamatukogu, mille omaduseks on raamatud (massiiv raamatutest).
let raamatukogu = [
    { pealkiri: "1984", autor: "George Orwell", aasta: 1949 },
    { pealkiri: "Harry Potter", autor: "J.K. Rowling", aasta: 2001 },
    { pealkiri: "Tأµde ja أµigus", autor: "A. H. Tammsaare", aasta: 1926 },
    { pealkiri: "Sأµrmuste isand", autor: "J.R.R. Tolkien", aasta: 1954 },
    { pealkiri: "Vأ¤ike prints", autor: "Antoine de Saint-Exupأ©ry", aasta: 1943 }
]

//2.2. Lisa meetod, mis kuvab kأµik raamatud kenasti konsoolis.
raamatukogu.forEach((raamat)=> {
    console.log(`
    Pealkiri: ${raamat.pealkiri},
    Autor: ${raamat.autor},
    Aasta: ${raamat.aasta}
    `);
});
let tulemus3 = document.getElementById("tulemus3");
let sisu = "";
raamatukogu.forEach((raamat)=> {
    sisu += `
        <b>Pealkiri:</b> ${raamat.pealkiri},<br>
        <b>Autor:</b> ${raamat.autor},<br>
        <b>Aasta:</b> ${raamat.aasta}<br><br>`;
})
tulemus3.innerHTML = sisu;

//Lisa meetod, mis lisab uue raamatu.
raamatukogu.splice(5,0,{ pealkiri: 'Kuristik rukkis', autor: 'J. D. Salinger', aasta: 1951 });
console.log(raamatukogu);
let tulemus4 = document.getElementById("tulemus4");
let sisu1 = "";
raamatukogu.forEach((raamat)=> {
    sisu1 += `
        <b>Pealkiri:</b> ${raamat.pealkiri},<br>
        <b>Autor:</b> ${raamat.autor},<br>
        <b>Aasta:</b> ${raamat.aasta}<br><br>`;
})
tulemus4.innerHTML = sisu1;


//Lisa meetod, mis kuvab raamatukogu raamatute koguarvu.
console.log("Raamatukogu raamatute koguarvu: " + raamatukogu.length);
let tulemus5 = document.getElementById("tulemus4");
tulemus5.innerHTML = "<i>"+"Raamatukogu raamatute koguarvu: "+"</i>" + raamatukogu.length;


//Lisa meetod, mis arvutab, mitu raamatut on ilmunud pأ¤rast 2000. aastat.
let uuemadRaamatud = raamatukogu.filter(raamat=> raamat.aasta >= 2000);
console.log(uuemadRaamatud);
let sisu2="";
let tulemus6 = document.getElementById("tulemus6");
uuemadRaamatud.forEach((raamat)=> {
    sisu2 += `
        <b>Pealkiri:</b> ${raamat.pealkiri},<br>
        <b>Autor:</b> ${raamat.autor},<br>
        <b>Aasta:</b> ${raamat.aasta}<br><br>`;
})
tulemus6.innerHTML = sisu2;

//Leiab kأµik A. H. Tammsaare raamatud
let tulemus7 = document.getElementById("tulemus7");
let sisu3 = " "
let otsing = raamatukogu.find(raamat => raamat.autor === "A. H. Tammsaare");
console.log("Tulemus:", otsing);
sisu3 += `
    <b>Pealkiri:</b> ${otsing.pealkiri},<br>
    <b>Autor:</b> ${otsing.autor},<br>
    <b>Aasta:</b> ${otsing.aasta}<br><br>`;
tulemus7.innerHTML = sisu3;