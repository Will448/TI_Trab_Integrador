

$sql = "DELETE FROM user WHERE id =  :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute();
