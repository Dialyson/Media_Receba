<?php
function connection(){
$servername = "ebh2y8tqym512wqs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "htffziruel8pxcf0";
$password = "lv38mkk56njlgsw1";
$dbname = "shsa1lefvhriyzml";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO Informacoes (nome, disciplina, nota_1,nota_2)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  return $conn;

        } catch(PDOException $e) {
        echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }
?> 