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
 
// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Verifique se o nome de usuário está vazio
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor, insira o nome de usuário.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Verifique se a senha está vazia
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, insira sua senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar credenciais
    if(empty($username_err) && empty($password_err)){
        // Prepare uma declaração selecionada
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // A senha está correta, então inicie uma nova sessão
                            session_start();
                            
                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: tela_inicial.php");
                        } else{
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else{
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>
 
 <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Login</title>

  <style>
    * {
  margin: 0px;
}

html, body {
  height: 100%;
  width: 100%;
}


/*Imagem 1*/
.image1{
  float:right;
  padding: 10px 80px;
}
/*-------------------------------------------*/

/*ENTRAR*/
.entrar{
  padding: 1% 24%;
  text-align: center;
  font-family: sans-serif;
  font-size: 20px;
  font-weight: bold;
  line-height:130%;
}
/*-----------------------------------------------------*/

/*Login*/
.login{
  padding: 1% 24%; 
}

input {
   width: 40%;
   padding: 2% 5%;
  margin: 2% 3%;
  box-sizing: border-box;
  border-radius: 35px;
  border-color: #6c63ff;
  color:#949494;
}
/*----------------------------------------------*/

/*Esqueceu sua senha?*/
.esqueceu{
  text-align: center;
  font-family: sans-serif;
  font-size: 12px;
  font-weight: bold;
  line-height:6%;
  color: #6c63ff;
}
/*----------------------------------------------*/

/*registrar-se*/
.registra{
text-align: right;
  padding:0%;
  font-family: sans-serif;
  font-size: 12px;
  font-weight: bold;
  line-height:50%;
}
/*------------------------------------------------*/

/*botao enviar*/
.botao{
  padding: 2% 17%;
}

input[type=submit]{
  width: 200px;
  height: 50px;
  text-align: center;
  border: 1px solid #6c63ff;
  border-radius: 36px;
  background-color: #6c63ff;
  font-size: 18px;
  color:white;
}
/*---------------------------------------------------*/

/*imagem da logo*/
.logo{
  position:absolute;
}
/*---------------------------------------------------*/
    </style>
</head>

<body>
<br><br>
  
  <!-- Imagem -->
  <div class="image1">
<img src="images/login.svg" alt="IMG">
</div>
  <div class="entrar">
    <h1>ENTRAR</h1>
  </div>
<!-- ----------------------------------------------- -->
<br><br>

<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
    <!-- Formulário Login -->
  <div class="login">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <input type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
    <input type="password" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>

    <input type="submit" value="Entrar">
</form>
  </div>
  <!-- ------------------------------------------------- -->

  <!-- Esqueceu a senha? -->
  <div class="esqueceu">
  <a href="tela_resetsenha.php" class="senha" target="">Esqueceu a senha?</a>
  </div>
  <!-- --------------------------------------------------------- -->

  <!-- Registrar-se -->
  <div class="registra">
    <a href="tela_cadastro.php" class="senha" target="">Registrar-se?</a>
  </div>
  <!-- ----------------------------------------------------------- -->
<br>
  <!-- botao de enviar -->

  <!-- ------------------------------------------------------ -->
  <br><br><br><br>
  
  <!--imagem da logo -->
  <div class="logo">
    <img src="images/logo.png" width="110" height="90">
  </div>
  <!-- ---------------------------------------------- -->

</body>
    </html>