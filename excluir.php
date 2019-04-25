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
$id=$_GET['id'];
$count = $dbh->exec("delete from formulario where id=$id");
echo"<a href='consulta.php'>Voltar</a><br>";
echo"<p> $count registro foi excluido";


?>