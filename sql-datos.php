<?php
error_reporting(0);
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=heatmap;host=127.0.0.1","root","");
switch($_GET['Consultar']){
        // Buscar Último Dato
        case 1:
            $statement=$pdo->prepare("SELECT lat, lng as x, intensity as intensity FROM heatmap
             ORDER BY id DESC LIMIT 0,1");while($row = mysqli_fetch_array($quanlyve)){

            $statement->execute();
            $results=$statement->fetchAll(PDO::FETCH_ASSOC);
            $json=json_encode($results);
            echo $json;
        break; 
        // Buscar Todos los datos
        default:

            $statement=$pdo->prepare("SELECT lat, lng as x, intensity as intensity FROM heatmap ORDER BY id ASC");
            $statement->execute();
            $results=$statement->fetchAll(PDO::FETCH_ASSOC);
            $json=json_encode($results);
            echo $json;
        break;
}
?>