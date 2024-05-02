<?



include "../database/conexao.php"; //Conexão

$login=$_POST['email'];

$senha=sha1($_POST['pass']);
//$senha=sha1('123');

$query = "SELECT * FROM tbl_admins as usuarios
inner join tbl_users as pessoa
ON (usuarios.id_pessoa = pessoa.id) 
WHERE login = '$login' AND senha = '$senha'"; //sha1('123')";

$result = mysqli_query($conexao,$query);
$totalres = mysqli_num_rows($result);


if ($totalres == 1)
{
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
        
        session_start();
        $_SESSION['id_user'] = $row['id_admin'];
        $_SESSION['email'] = $row['email'];
        
        $_SESSION['id_grupo'] = $row['id_grupo'];
        $_SESSION['nome'] = $row['nome'];
        
            
    }
}
echo $_SESSION['id_user'];
echo $_SESSION['email'];
echo $_SESSION['id_grupo'];

$vendedor = $_SESSION['nome'];

if ($totalres == 1)
{
    // Usuário autenticado
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login acessou o sistema. Senha: $senha','$vendedor')";
    mysqli_query($conexao,$queryLog);
    
    echo "sucesso"; 
    echo $query;   
}
else
{
    echo $query;
}

?>
<!-- SELECT * FROM tbl_admins as usuarios
            inner join tbl_users as pessoa
            ON (usuarios.id_pessoa = pessoa.id) 
            WHERE login = 'rafael-rota' AND senha = sha1('123') -->