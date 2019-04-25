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

$nome=$_GET['nome'];
$nascimento=$_GET['nascimento'];
$salario=$_GET['salario'];

$id=$_GET['id'];
$count = $dbh->exec("update formulario set nome='$nome', 
    nascimento='$nascimento',salario='$salario' where id=$id");

echo"<p>$count registro foi alterado</p>";
echo"<a href='consulta.php'> Voltar</a>";

?>