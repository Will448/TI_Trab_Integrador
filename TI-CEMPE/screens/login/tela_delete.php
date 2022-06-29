<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: tela_inicial.php");
    exit;
}
 
// Incluir arquivo de configuração
require_once "../database/bd_login.php";

$sql = "DELETE FROM user WHERE id =  :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute();

?>
