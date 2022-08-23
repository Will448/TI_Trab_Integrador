<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Página Inicial</title>

  <style>
   * {
  margin: 0px;
}

/*Navbar*/
.active {
  display: flex;
  justify-content: flex-end;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FFFF;
}

li {
  float: left;
  justify-content: flex-end;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none; 
}

li a:hover {
  background-color: #d1d1d1;
}
/*-------------------------------- */

/*imagem da logo*/
.logo{
  float:right;
}
/*-------------------------------- */

/*titulo*/
.titulo {
  font-family: sans-serif;
  text-align: left;
  font-size: 45px;
  font-weight: bold;
  line-height:130%;
   padding: 25px 1em 0 0.5em;
}
/*-------------------------------- */

/*subtitulo*/
.subtitulo {
  font-family: Times New Roman;
  text-align: left;
  font-size: 18px;
  padding: 0px 1em 0 2em;
} 
/*--------------------------------*/

/*botões*/
.button {
  border: none;
  color: #ffffff;
  padding: 20px 100px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 100px 5px;
  cursor: pointer;
  background:#6C63FF;
  border-radius: 30px;
  float:left;
}
/*---------------------------------------------------*/

/*imagem 2*/
.image2{
  float: left;
padding-top: 10%;
  padding-bottom:20%;
}
/*--------------------------------------------------*/

/*titulo imagem 2*/
.segundo{
    font-family:sans-serif;
  text-align: left;
  font-size: 30px;
  font-weight: bold;
  padding-bottom:20%;
  padding-top: 10%;
  
}
/*----------------------------------------------------*/

/*texto imagem 2*/
.texto{
 font-family:sans-serif;
  text-align: left;
  font-size: 17px;
  line-height:130%; 
  padding-bottom:10%;
}
/*---------------------------------------------------*/

/*imagem 3*/
.image3{
  float:right
}
/*---------------------------------------------------*/

/*titulo imagem 3*/
.terceiro{
    font-family:sans-serif;
  text-align: left;
  font-size: 20px;
  font-weight: bold;
  line-height:130%
}
/*---------------------------------------------------*/

/*texto imagem 3*/
.texto2{
 font-family: sans-serif;
  text-align: left;
  font-size: 17px;
  line-height:130% 
}
/*-----------------------------------------------------*/

/*imagem 4*/
.image4{
  float: left;
  padding: 2px 3em 0 10em;
}
/*-----------------------------------------------------*/

/*titulo imagem 4*/
.quarto{
    font-family: sans-serif;
  text-align: left;
  font-size: 20px;
  font-weight: bold;
  line-height:130%
}
/*-----------------------------------------------------*/

/*texto imagem 4*/
.texto3{
 font-family: sans-serif;
  text-align: left;
  font-size: 17px;
  line-height:130% 
}
/*-----------------------------------------------------*/

/* Footer */
.footer {
  overflow: hidden;
  background-color: #000000;
  color:white;
  font-size: 12px;
}
.column {
  float: left;
  width: 14%;
  margin: 20px 1.15%;
  height: 100px;
  background-color: #000000;    
}
.avatar {
  float: left;
  width: 70px;
  height: 70px;
  margin: 25px;
  border-radius: 40px;
}

.username {
  margin-top: 30px;
}

.comment {
  margin: 10px;
  overflow: hidden;  
}
/*---------------------------------------------------*/
    </style>
</head>

<body>

   <!--navbar -->
  <div class="active">
    <ul>
    <li class="nav-item">
      <a class="nav-link" href="#fun">Funcionalidades</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#des">Design Thinking</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="#fas">Fases</a>
    </li>
    </ul>
  </div>
  <hr>
<!-- ---------------------------------------------- -->
  
  
<!--imagem da logo -->
  <div class="logo">
    <img src="imagens/logo.png" width="110" height="90">
  </div>
  <!-- ---------------------------------------------- -->

  <!--titulo -->
  <div class= "titulo">
    <p>AS MELHORES FERRAMENTAS<br> PARA EMPREENDEDORES</p>
  </div>
   <!-- --------------------------------------------- -->

  <!--subtitulo -->
  <div class="subtitulo">
      <p>Seja bem vindo ao nosso site loge-se ou cadastre-se, logo abaixo!</p>
    </div>
   <!-- --------------------------------------------- -->
  
  <br><br><br><br><br><br>

  <!-- botões -->
<a href="./screens/tela_login.php"><button class="button" >Logar</button> </a>
<a href="./screens/tela_cadastro.php"><button class="button" >Cadastre-se</button> </a><br>
<!-- ---------------------------------------------- -->

  <!--imagem 1 -->
  <div class= "image1">
    <img src="imagens/image1.svg" width="800" height="600">
  </div>
  <hr>
  <!-- -------------------------------------------- -->
  <br><br><br><br><br>

  <!-- imagem 2 -->
<div class="image2">
  <img src='imagens/image2.svg' width='350' height='350'>
</div>
  <!-- ---------------------------------------------- -->
<div 
  <!-- titulo da imagem 2-->
  <div class="segundo"
  <h1 id=fun>FUNCIONALIDADES</h1></div>
  <!-- ---------------------->
  <br><br>

  <!--texto da imagem 2-->
    <div class="texto">
  <p>Ajuda a creatividade, sabendo como funciona os meios de propaganda entre as redes sociais o que é mais atrativo para chamar a atenção do seu cliente alvo.</p>
  <br><br><br><br><br><br><br><br>
  </div>
  <!-- ----------------------------------------- -->

  <!-- imagem 3 -->
  <div class= "image3">
    <img src="imagens/image3.svg" width='400' height='250'> 
  </div>
  <!-- ---------------------------------------->

  <!-- titulo da imagem 3 -->
  <div class="terceiro">
  <h2 id=des>O QUE É DESIGN THINKING?</h2></div>
 <!-- ---------------------------------------->
 <br><br>

  <!-- texto da imagem 3 -->
  <div class="texto2">
 <center><p>“Design Thinking é uma abordagem para busca da inovação centrada nas pessoas, que utiliza ferramentas de design para integrar as necessidades dos usuários, as possibilidades da tecnologia e os requisitos para o sucesso do negócio”.</p>
<p>----Tim Brown----</p></center></div>
  <!-- --------------------------------------- -->
  <br><br><br><br><br>

  <!-- imagem 4-->
  <div class= "image4">
    <img src="imagens/image4.svg"width='400' height='400'></div>
  <!-- ---------------------------------------- -->
  <br><br><br>

  <!-- titulo da imagem 4 -->
  <div class="quarto">
 <h3 id=fas>QUAIS SÃO AS 5 FASES DO DESING THINKING?</h3>
  <p>As 5 etapas do Design Thinking são:</p><br></div>
  <!-- ----------------------------------------- -->

  <!-- texto da imagem 4 -->
   <div class="texto3">
  <center><p> <ol>
<li>Imersão: ter empatia com seu público e compreender</li><br>
<li>Análise e síntese: definir qual é o problema a ser resolvido</li><br>
<li>Ideação: sugerir ideias que possam solucionar o problema</li><br>
<li>Prototipação: fazer uma “simulação” do produto/serviço final</li><br>
<li>Validação e implementação: testar e colocar a ideia em prática</p></li>
    </ol></center>
   </div>
<!-- --------------------------------------- -->
  <br><br><br><br><br><br><br><br><br><br><br>
<!-- ----------------------------------------->
  
  <!--Footer --> 
  <div class='footer'>
  <div class='column'>
    <img src="imagens/carlos.jpg" alt="Avatar" class="avatar">
  <h3 class='username'>Carlos Eduardo Sbardella</h3>
  <p class='comment'></p>
</div>  
  <div class='column'>
  <img src="imagens/Emanuele.jpg" alt="Avatar" class="avatar">
    <h3 class='username'>Emanuele Ferrazzo</h3>
  <p class='comment'></p>
  </div>
  <div class='column'>
    <img src="imagens/fernanda.jpeg" alt="Avatar" class="avatar">
    <h3 class='username'>Fernanda Batistello</h3>
  <p class='comment'></p>
  </div>
    <div class='column'>
    <img src="imagens/julia.jpg" alt="Avatar" class="avatar">
    <h3 class='username'>Julia Cacciatori</h3>
  <p class='comment'></p>
  </div>
    <div class='column'>
    <img src="imagens/maria.jpg" alt="Avatar" class="avatar">
    <h3 class='username'>Maria Maroli</h3>
  <p class='comment'></p>
  </div>
    <div class='column'>
    <img src="imagens/william.jpg" alt="Avatar" class="avatar">
    <h3 class='username'> William Bongiovanni</h3>
  <p class='comment'></p>
  </div>
</div>
 <!-- ------------------------------------------- -->
  
  <script src="script.js"></script>

</body>

</html>
