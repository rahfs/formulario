
<html>
<head>
<link rel="stylesheet" type= "text/css" href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>
<script src=https://code.jquery.com/jquery-3.3.1.js></script>
<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>

<script>
$(document).ready(function() {
    $('#tabela').DataTable();
} );
</script>
<style>
td {text-align:center}
</style>
</head>
<body>
<br>
<br>
<div>  
<a href=cadastro.php class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-size:16px; padding:10px;">Novo Registro</a>
<a href="consulta.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="font-size:16px; padding:10px;">Atualizar</a>
 </div> 
<p></p>
<?php

$dsn ='mysql:dbname=trabalho;host=127.0.0.1';
$user ='root';
$password='';

try{
    $dbh= new PDO($dsn, $user, $password);
}
catch(PDOException $e){
    echo 'Connection failed'. $e->getMessage();
}

$sql = 'SELECT * FROM formulario ORDER BY 1';
// 
echo"<table id=tabela  class='display stripe hover row-border' style='width:100%'>
<thead>
<tr><th>id</th><th>Nome Completo</th><th>Nascimento</th><th>Salário</th><th></th><th></th></tr>
</thead>
<tbody>
";

foreach($dbh->query($sql)as $row){
    echo"<tr>";
    echo"<td>".$row['id']."</td>";
    echo"<td>".$row['nome']."</td>";
    echo"<td>".$row['nascimento']."</td>";
    echo"<td>".$row['salario']."</td>";
    echo"<td><a href=editar.php?id=".$row['id']."> Editar</a></td>";
    echo"<td><a href=excluir.php?id=".$row['id']."> Excluir</a></td>";
    echo"</tr>";
    }
    echo"</tbody></table>";
    ?>

</body>
    </html>