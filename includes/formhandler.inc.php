<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $score = $_POST["score"];

  try {
    require_once "dbh.inc.php";
   
    $query = "INSERT INTO basicratingscore(username, pwd, score) VALUES (:username, :pwd, :score);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":score", $score);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");
    
    die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}
else{
  header("Location: ../index.php");
}