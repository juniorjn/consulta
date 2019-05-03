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
  <title>Login</title>
</head>
<body>
  <?php
  if (isset($_POST['enviar'])) {
    if ($_POST['usuario'] == 'estanislau' and $_POST['senha'] == '2019') {
     header("Location: painel.php?usuario=" . $_POST['usuario']);
   } else {
    echo " 
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/paciente/index.php'>
    <script type=\"text/javascript\">
    alert(\"Login ou senha Incorretos !\");
    </script>";
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

        <h6 class="text-center"><p class="text-secondary">Faça Login para relatar a situação do paciente</p></h6>
        
        <div class="row">
         
          <div class="col">
            <hr>
          </div>
          
          <div class="col">
            <hr>
          </div>
        </div>
        
        <div ><label  class="text-secondary" type="text" name="login" style="background-color:#fafafa; font-size: 20px; color: black;">Login </label></div>
        <div class="form-group"><input type="text" name="usuario" class="form-control" style="background-color:#fafafa; font-size: 16px; color: black;"> </div>
        <div ><label  class="text-secondary" type="text" name="Senha" style="background-color:#fafafa; font-size: 20px; color: black;">Senha </label></div>
        <div class="form-group"> <input type="password" name="senha" class="form-control" style="background-color:#fafafa; font-size: 16px; color: #999;"></div>
        
        
        
        <center><button type="submit" name="enviar" class="btn btn-primary">Login</button></center><br>
        
      </form>
    </div>
  </div>
  <br>
  <div class="col-md-4 offset-md-4" style=" background-color:white; border: 1px solid #e6e6e6; font-size:15px;">
    <br>
    <center>Primeira vez em nosso site? <a href="cadastro.php">Cadastre-se</a></center>
    <br>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>