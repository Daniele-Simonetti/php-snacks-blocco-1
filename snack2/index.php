<?php 
// ## Snack 2
// Passare come parametri GET name, mail e age 
// e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
// che mail contenga un punto e una chiocciola 
// e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
// $age = $_GET['age'];
// $email = $_GET['mail'];
$checkName = false;
$checkMail = false;
$checkAge = false;

// nome
if (empty($_GET['name']) === false) {
  # code...
  $name = $_GET['name'];
  if (mb_strlen($name) >= 3) {
    $checkName = true;
    # code...
  }
} 

// email
if (empty($_GET['mail']) === false) {
  # code...
  $mail = $_GET['mail'];
  if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
    $checkMail = true;
    # code...
  }
} 

// age
if (empty($_GET['age']) === false) {
  # code...
  $age = $_GET['age'];
  if (is_numeric($age) == true) {
    $checkAge = true;
    # code...
  }
} 

if ($checkName == true && $checkMail == true && $checkAge == true) {
  # code...
  $message = 'Accesso riuscito';
} else {
  $message = 'Accesso negato';
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
  <h1> <?php echo $message ?> </h1>
</body>
</html>