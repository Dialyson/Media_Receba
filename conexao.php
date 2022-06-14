<?php
function connection(){
$servername = "ebh2y8tqym512wqs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "htffziruel8pxcf0";
$password = "lv38mkk56njlgsw1";
$dbname = "shsa1lefvhriyzml";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 return $conn;

        } catch(PDOException $e) {
        echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }
?> 
