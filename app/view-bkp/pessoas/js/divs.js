function OpenCadastro() {
    var x = document.getElementById("divCadastros");
    var y = document.getElementById("divPesquisar");
    var z = document.getElementById("result");

    if (x.style.display === "block") {
        x.style.display = "none";

    } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";

    }


}

function OpenPesquisa() {
    var x = document.getElementById("divCadastros");
    var y = document.getElementById("divPesquisar");
    var z = document.getElementById("result");

    if (y.style.display === "block") {
        y.style.display = "none";
        z.style.display = "none";

    } else {
        y.style.display = "block";
        z.style.display = "block";
        x.style.display = "none";
    }


}