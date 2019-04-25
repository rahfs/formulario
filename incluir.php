<?php

$nome = $_GET['nome'];
$nascimento=$_GET['nascimento'];
$salario=$_GET['salario'];

$dsn ='mysql:dbname=trabalho;host=127.0.0.1';
$user ='root';
$password='';

try{
    $dbh= new PDO($dsn, $user, $password);
}
catch(PDOException $e){
    echo 'Connection failed'. $e->getMessage();
}

$sql ="insert into formulario(nome,nascimento,salario)
values ('$nome','$nascimento','$salario')";
$count = $dbh->exec($sql);
echo" <a href='consulta.php'>Voltar</a>";
echo"<p>$count registro foi incluído</p>";

?>