<html>
<head> <title> Edição de cadastros</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#altura{
    height:100%;
}
#back{
background-color:black;
color:white;
}
</style>

</head>

<body>
<?php
$dsn ='mysql:dbname=trabalho;host=127.0.0.1';
$user ='root';
$password='';

try{
    $dbh= new PDO($dsn, $user, $password);
} catch(PDOException $e){
    echo 'Connection failed'. $e->getMessage();
}

$id= $_GET['id'];

$sql = "SELECT * FROM formulario where id=$id";
 foreach($dbh->query($sql)as $row){
echo'
<br>
<form class="form-signin" action="update.php" method="GET" style="background-color:black;" id="altura" >
    <div class="container " id="altura" >
        <div class="row">
            <div class="col-2" id="back"></div>
                <div class="col-8" id="altura" style=" background-color:white;">
                        

                              <center>
                              <h1>Cadastro de pessoas</h1>
                               </center>
                                <br>
                                <div class="form-group">
                                
                            <div class="input-group mb-3 col-12">
                                <div class= "input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img src="https://images.vexels.com/media/users/3/131134/isolated/preview/a3d01cc27afc425e0721b2b9eee29c4a---cone-do-cart--o-de-identidade-by-vexels.png" height="20" width="20"></span>
                                </div>
                        <input type="text" class="form-control" placeholder="Nome Completo" name="nome" value='.$row['nome'].'>
                            </div> <!-- nome  acima -->
                          
                        
                        </div> <!-- form -->

                        <div class="form-group" >

                        <div class="form-group">
                            <div class="input-group mb-3 col-6">
                                <div class= "input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img src="https://png.pngtree.com/svg/20160222/new_oriental_calendar_icon_133062.png" height="20" width="20"></span>
                                </div>
                        <input type="date" class="form-control" placeholder="Data de Nascimento" name="nascimento" value='.$row['nascimento'].'>
                            </div><!-- data de nasc acima -->

                        <div class="form-group">
                            <div class="input-group mb-3 col-6">
                                <div class= "input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><img src="https://cdn2.iconfinder.com/data/icons/web-technology-outline/100/outline_money_payment_metod_dinheiro-512.png" height="20" width="20"></span>
                                </div>
                        <input type="number" class="form-control" placeholder="Salario" name="salario" value='.$row['salario'].'>
                            </div><!-- salario acima -->

                    
                    </div>
                </div><!-- div formulario-->
               

                            
                            <div class="d-flex justify-content-center mt-6 login_container">
                                <div class=" offset-md-3" >
                                        
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" aria-pressed="true" style="font-size:16px;">Cadastrar</button>
                                </div><!-- botao cadastrar-->

                                <div class="col" style="padding-left:15px;">
                                        <button type="reset" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-size:16px;">Limpar Campos</button>
                                </div>  <!-- botao limparcampos-->
                                
                                <div class="col-5">
                                        <a href="consulta.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-size:16px;">Voltar</a>
                                </div>    <!-- botao voltar-->  

                                    </div>

                                            
                                    

                                
                                    <br>
                                    
                                </div><!-- fim form-->
<input type=hidden name=id value='.$row['id'].'>
        </div><!-- div da borda-->
        
   </div> <!-- div row-->
   </div> <!-- div container-->
<footer style="background-color:black;"></footer>
</form>'
;}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>