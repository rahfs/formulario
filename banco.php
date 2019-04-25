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


$count = $dbh->exec("Insert into formulario(nome,nascimento,salario)
values ('rafael','06011997','500')");

echo"<p>$count registro foi incluído</p>";

$sql = 'SELECT * FROM formulario ORDER BY 1';
foreach($dbh->query($sql)as $row){

    print $row['id']. "\t<br>";
    print $row['nome']. "\t<br>";
    print $row['nascimento']. "\t<br>";
    print $row['salario']. "\t<br>";
}
?>