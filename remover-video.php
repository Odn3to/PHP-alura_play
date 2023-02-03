<?php 
use Alura\Mvc\Repository\VideoRepository;

$dbPath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$id = $_GET['id'];
// $sql = 'DELETE FROM videos WHERE id= ?';
// $statement = $pdo->prepare($sql);
// $statement->bindValue(1, $id);

$repositoy = new VideoRepository($pdo);

if($repositoy->remove($id) === false){
    header('location: /index.php?sucesso=0');
}else{
    header('location: /index.php?sucesso=1');
}