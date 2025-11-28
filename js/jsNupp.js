function tana() {
    let now = new Date();

    let kuupaev = now.toLocaleDateString();
    let kellaaeg = now.toLocaleTimeString();
    let koos = now.toLocaleString();

    let tulemus = document.getElementById("tulemus");

    tulemus.innerHTML = "<b>kuupäev:</b> " + kuupaev + "<br>" +
        "<b>kellaaeg:</b> " + kellaaeg + "<br>" +
        "<b>Kuupäev ja kellaaeg:</b> " + koos;

    console.log("Kuupäev: " + kuupaev);
    console.log("Kellaaeg: " + kellaaeg);
    console.log("Kuupäev ja kellaaeg: " + koos);
}

function sunnipaev() {
    let tulemus = document.getElementById("tulemus");

    let tana = new Date();
    let synnipaev = new Date(2008,4,10);
    if (tana > synnipaev) {
        synnipaev = new Date(tana.getFullYear() + 1, 4, 10);
    }

    let vahe = synnipaev - tana;
    let paevad = vahe / (1000 * 60 * 60 * 24);

    tulemus.innerText = "Sünnipäevani on jäänud " + paevad + " päeva.";
    console.log("Sünnipäevani on jäänud: " + paevad + " päeva");
}