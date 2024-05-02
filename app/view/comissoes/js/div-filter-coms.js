// FUNCOES QUE ABREM E FECHAM OFF-CANVAS DO FILTER
function openNavFilter() {
    document.getElementById("search-left-area").style.display = "block";
    document.getElementById("open-filter2").style.display = "none";

    document.getElementById("div-filtros").classList.remove("col-sm-0");
    document.getElementById("div-filtros").classList.add("col-sm-2");

    document.getElementById("filtros-content").classList.remove("col-sm-12");
    document.getElementById("filtros-content").classList.add("col-sm-10");
    document.getElementById("filtros-content").style.marginLeft = "auto";
    document.getElementById("parente-scrota").style.width = "100%";


}

function closeNavFilter() {
    if (screen.availWidth <= 768) {

        document.getElementById("search-left-area").style.display = "none";
        document.getElementById("open-filter2").style.display = "block";
        document.getElementById("open-filter2").style.marginLeft = "2px";
        document.getElementById("open-filter2").style.position = "absolute";
        document.getElementById("open-filter2").style.top = "60px";

    } else {
        document.getElementById("search-left-area").style.display = "none";
        document.getElementById("open-filter2").style.display = "block";
        document.getElementById("open-filter2").style.marginLeft = "2px";

        document.getElementById("div-filtros").classList.remove("col-sm-2");
        document.getElementById("div-filtros").classList.add("col-sm-0");

        document.getElementById("filtros-content").classList.remove("col-sm-10");
        document.getElementById("filtros-content").classList.add("col-sm-12");
        document.getElementById("filtros-content").style.marginLeft = "40px";

        document.getElementById("parente-scrota").style.width = "95%";
    }

}


function showDetalhesComissaoFilter(idvend = null, dtaini = null, dtafim = null) {
    $("#respHint").append('teste');
    /* $.ajax({
        url: "ajax/total_comissao_vendedor_periodo.php?idvendedor=" + idvend + "&inicio=" + dtaini + "&fim=" + dtafim,
        type: 'get',
        dataType: 'JSON',
        success: function(response) {
            var len = response.length;
            for (var i = 0; i < len; i++) {
                var id = response[i].id;
                var username = response[i].username;
                var name = response[i].name;
                var email = response[i].email;

                var tr_str = "<tr>" +
                    "<td align='center'>" + (i + 1) + "</td>" +
                    "<td align='center'>" + username + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "</tr>";

                $("#respHint").append('teste');
            }

        }
    }); */
    /* 
        alert('teste');
        if (idvend == "") {
            document.getElementById("respHint").innerHTML = "";
            return;
        } else {
            var dados = fetch(ipAPI).then(response => response.json());
            document.getElementById("respHint").innerHTML = dados;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("respHint").innerHTML = dados.responseText;
                }
            };
            xmlhttp.open("GET", "ajax/total_comissao_vendedor_periodo.php?idvendedor=" + idvend + "&inicio=" + dtaini + "&fim=" + dtafim, true);
            xmlhttp.send();
        } */
}