<?php
require "connect.php";

$id = $_GET['id'];

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connexion->prepare('DELETE FROM article WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->execute();

header("HX-Refresh: true");

$connexion = null;