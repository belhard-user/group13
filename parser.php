<?php
$html = file_get_contents('https://www.tut.by/');

preg_match_all('/<span *class="entry-head _title">[^<]+<\/span>/', $html, $m);

$pdo = new PDO('mysql:dbname=study;host=localhost', 'root', '');
$sql = "INSERT INTO tut (title) VALUES (:title)";
foreach ($m[0] as $item){
    $item = strip_tags($item);

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title' => $item]);
}
unset($pdo);