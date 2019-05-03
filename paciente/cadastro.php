<!DOCTYPE html>    
<head lang="pt-br">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width  , initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .letra{
     font-family: 'Wendy One', sans-serif;
     color: green;


   }
   body{
    background-color:#fafafa;
    font-size: 17px;
  }
</style>

<title>Cadastro</title>
</head>
<body>

 <?php
 if (isset($_POST['enviar2'])) {
  if (empty($_POST['nome']) or empty($_POST['usuario2']) or empty($_POST['senha2']) or empty($_POST['telefone'])) {
    echo " 
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/paciente/cadastro.php'>
    <script type=\"text/javascript\">
    alert(\"Preencha todos os campos !\");
    </script>";
  } else {
   echo "<script type=\"text/javascript\">
   alert(\"Preencha todos os campos !\");
   </script>";
   header("Location: painel.php?usuario=" . $_POST['usuario']);
 }
}
?>

<div class="container">
  <div class="row">
   
    <div class="col-md-4 offset-md-4" style=" background-color:white; border: 1px solid #e6e6e6; ">
     <div class="col-md-12" >
       <br>
       <h1 class="letra" ><p class="text-center">Uminerd</p></h1> 
       
       <form class="form-signin" autocomplete="off" method="POST">

        <h6 class="text-center"><p class="text-secondary">Preencha o Formulário para se cadastrar !</p></h6>
        
        <div class="row">
         
          <div class="col">
            <hr>
          </div>
          
          <div class="col">
            <hr>
          </div>
        </div>
        
        <div ><label  class="text-secondary" type="text" style="background-color:#fafafa; font-size: 20px; color: black;">Nome Completo</label></div>
        <div class="form-group"><input type="text" name="nome" class="form-control" style="background-color:#fafafa; font-size: 16px; color: black;"> </div>
        <div ><label  class="text-secondary" type="text" style="background-color:#fafafa; font-size: 20px; color: black;">Login </label></div>
        <div class="form-group"><input type="text" name="usuario2" class="form-control" style="background-color:#fafafa; font-size: 16px; color: black;"> </div>
        <div ><label  class="text-secondary" type="text" style="background-color:#fafafa; font-size: 20px; color: black;">Senha </label></div>
        <div class="form-group"> <input type="password" name="senha2" class="form-control" style="background-color:#fafafa; font-size: 16px; color: #999;"></div>
        <div ><label  class="text-secondary" type="text" style="background-color:#fafafa; font-size: 20px; color: black;">Telefone </label></div>
        <div class="form-group"><input type="text" placeholder="Ex: (21) 99999-9999" name="telefone" class="form-control" style="background-color:#fafafa; font-size: 16px; color: black;"> </div>

        
        
        
        <center><button type="submit" name="enviar2" class="btn btn-primary">Cadastrar-se</button></center><br>
        
      </form>
    </div>
  </div>
  <br>
  <div class="col-md-4 offset-md-4" style=" background-color:white; border: 1px solid #e6e6e6; font-size:15px;">
    <br>
    <center>Volte a tela de login caso já esteja cadastrado ! <a href="login.php">Logar</a></center>
    <br>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>