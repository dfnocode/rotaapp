<?php
/* Connect to a MySQL database using driver invocation */
/* $dsn = 'mysql:dbname=db_blog;host=localhost;port=10034';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
} */

?>

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
  case "name":
    $stmt = $pdo->prepare("SELECT `descricao` FROM `tbl_produtos` WHERE `descricao` LIKE ?");
    $stmt->execute(["%" . $_POST['search'] . "%"]);
    while ($row = $stmt->fetch()) { $data[] = $row['descricao']; }
    break;

  // (B3) SEARCH BY USER EMAIL (MULTIPLE FIELDS AUTOCOMPLETE)
  case "email":
    $stmt = $pdo->prepare("SELECT * FROM `tbl_produtos` WHERE `descricao` LIKE ?");
    $stmt->execute(["%" . $_POST['search'] . "%"]);
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) { 
      $data[] = [
        "D" => $row['descricao'],
        "dUnidade" => $row['unidade'],
        "dPreco" => $row['preco'],
        "id_produto" => $row['id']        
      ]; 
    }
    break;
}

// (C) RETURN RESULTS
if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;