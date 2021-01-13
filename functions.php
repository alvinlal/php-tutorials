<?php

 function sayHello($name = "jane") {
  echo "Hello {$name}";
 }
 sayHello("alvin");

 function getlist($product) {
  return "<h1>{$product['name']} costs {$product['price']}</h1>";
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo getlist(['name' => "ps5", 'price' => '$500']); ?>

</body>

</html>