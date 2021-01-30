<?php
	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2],
	];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>products with price less than 20</h1>
    <div>
        <ul>
            <?php foreach ($products as $product) {;?>
            <?php if ($product['price'] < 20) {;?>
            <li><?php echo $product['name'] . ":" . $product['price']; ?></li>
            <?php }?>
            <?php }?>
        </ul>
    </div>

</body>

</html>