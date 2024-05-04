<?php
require 'config.php';

function getPosts($pdo)
{
    $stmt = $pdo->query('SELECT * FROM posts ORDER BY created_at DESC');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>