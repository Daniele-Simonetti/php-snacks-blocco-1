<?php
## Snack 3
// Creare un array di array. 
// Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e 
// come valore un array di post associati a quella data. 
// Stampare ogni data con i relativi post.
$posts = [
  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Mi',
      'text' => 'Testo post 1'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Chiamo',
      'text' => 'Testo post 2'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Spigolo',
      'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'E',
      'text' => 'Testo post 4'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Sono',
      'text' => 'Testo post 5'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Appuntito',
      'text' => 'Testo post 6'
    ]
  ],
];

var_dump(array_keys($posts));
for ($i=0; $i < count($posts); $i++) { 
  # code...
  var_dump($posts[$i]);
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