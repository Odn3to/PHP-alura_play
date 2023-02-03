<?php

$dbPath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$sql = 'SELECT * FROM videos;';
$videoList = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($videoList as $video) {
    echo "id: " . $video['id'] . "url: " . $video['url'] . "title: " . $video['title'];
}