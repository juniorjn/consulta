<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTROLE DE GRAVIDADE</title>
    <link href="https://fonts.googleapis.com/css?family=Wendy+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="painel.css">
    <link rel="icon" sizes="192x192" href="img/user.png">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>



<body style="background:#F8F8FF;">

    <script type="text/javascript">
        alert("Login Realizado com Sucesso !");
    </script>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
         <center><h1>Situação do Paciente(s) <br>
            <h6> " Insira o nome do paciente e arraste o nome para o bloco em que se encaixa melhor com a situação do mesmo." </h1></center>
             
            </div>
        </div>
        
        <div>
            <input type="text" id="t1" placeholder=" Digite o nome do paciente..." style=" display: inline-block;width: 300px; left: 380px; top: 80px; margin-left: 480px " />

            <button class="btn btn-secondary" id="b1" onclick="insert()" style="display: inline-block; margin-left: 7px; height: 40px; margin-left: 0px">enviar</button>

            <input type="button" onclick="cadastro: location.href='login.php';" value="Trocar de Usuário" style="display: inline-block; margin-left: 300px;"/>
        </div>
        
        <br>


        <div>
         <p id="circulo" style="background: red; margin-left: 200px;"></p>
         <p id="circulo" style="background: #D7DF01; margin-left: 300px;"></p>
         <p id="circulo" style="background: chartreuse; margin-left: 300px;"></p>
     </div>

     

     <div>
        <b><strong style="display: inline-block; color: red; font-size: 20px; margin-left: 180px;"> EMERGÊNCIA </strong></b>
        <b><strong style="display: inline-block; color: #D7DF01; font-size: 20px; margin-left: 280px;"> URGÊNCIA </strong></b>
        <b><strong style="display: inline-block; color: chartreuse; font-size: 20px; margin-left: 310px;"> ESTÁVEL </strong></b>
    </div> 

    

    <div>
        <div id="tipos" class="red">
            <b><strong style="font-size: 20px; color:white">Neste caso o paciente precisa de atendimento imediato<hr></strong></b>
        </div>
        <div id="tipos" class="yellow">
            <b><strong style="font-size: 20px; color:white">Condição que pode agravar sem atendimento apropriado<hr></strong></b>
        </div>  
        <div id="tipos" class="green">
         <b> <strong style="font-size: 20px;  color:white">Sem risco imediato de agravo a saúde deste paciente<hr></strong></b>
     </div>   

     <script>
         
        function insert() {
            var x = document.getElementById('t1').value;
            $("body").append("<p><strong>" + x + "<strong></p>");
            document.getElementById('t1').value = '';
            $(function() {
                $("p").draggable();
            });
        }
    </script>




</body>

</html>


