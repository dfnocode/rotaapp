<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="sit" onchange="showUser(this.value)">
  <option value="">Pedidos por Situação:</option>
  <option value="Editando">Editando</option>  
  <option value="Em Aberto">Em Aberto</option>
  <option value="Atendido">Atendido</option>
  <option value="Cancelado">Cancelado</option>
  <option value="Venda Agenciada">Venda Agenciada</option>
  <option value="Concluido">Concluido</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Não existem pedidos nessa situação</b></div>

</body>
</html>