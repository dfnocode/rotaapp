
<?php
// (A) CONNECT TO DATABASE
// ! CHANGE SETTINGS TO YOUR OWN !
$dbhost = 'localhost;port=10040';
$dbname = 'rotadb24';
$dbchar = 'utf8';
$dbuser = 'root';
$dbpass = 'root';
$pdo = new PDO(
	"mysql:host=$dbhost;dbname=$dbname;charset=$dbchar", 
  $dbuser, $dbpass
);

// (B) DO SEARCH
$data = [];
switch ($_POST['type']) {
  // (B1) INVALID SEARCH TYPE
  default: break;

  // (B2) SEARCH FOR USER NAME (SINGLE FIELD AUTOCOMPLETE)
  case "email":
    $stmt = $pdo->prepare("SELECT `nome` FROM `clientes` WHERE `nome` LIKE ?");
    $stmt->execute(["%" . $_POST['search'] . "%"]);
    while ($row = $stmt->fetch()) { $data[] = $row['nome']; }
    break;

  // (B3) SEARCH BY USER EMAIL (MULTIPLE FIELDS AUTOCOMPLETE)
  case "name":
    $stmt = $pdo->prepare("SELECT * FROM `clientes` WHERE `nome` LIKE ?");
    $stmt->execute(["%" . $_POST['search'] . "%"]);
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) { 
      $data[] = [
        "D" => $row['nome'],
        "dFantasia" => $row['fantasia'],
        "dMail" => $row['email'],
        "dTel" => $row['telefone'],
        "dNum" => $row['cnpjcpf'],
        "dCliente" => $row['id']
      ]; 
    }
    break;
}

// (C) RETURN RESULTS
if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;