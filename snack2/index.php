<?php 
// ## Snack 2
// Passare come parametri GET name, mail e age 
// e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola 
// e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['mail'];
var_dump($name);
var_dump($email);
var_dump($age);
$nameLeng= strlen($name);
var_dump($nameLeng);
if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
  # code...
  var_dump($email);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>