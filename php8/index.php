<?php include 'ShoppingList.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- boostrap stuff -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8 Shopping Cart</title>
</head>
<body>
<!-- bootstrap stuff -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- fontawesome kit -->
<script src="https://kit.fontawesome.com/cf89e4c784.js" crossorigin="anonymous"></script>

<div class="container">
<!-- dynamic title -->
<?php
$title = 'Shopping List'
?>

<br>
<br>

<!-- main header -->
<h2 class="card-header">
    <?php echo $title?>
    <i class="fa-solid fa-cart-shopping"></i>
</h2>

<br>
<br>


<ul class="list-group">

<h3>
    First list:
    <?php
        //new product and display on page
        $list1 = new ShoppingList(price: 1.35, quantity: 2, productName: 'potatoes');
        echo $list1->priceAsCurrency(currencySymbol: '£') . PHP_EOL . 'for' . PHP_EOL ; //passing named argument
        echo $list1->getQuantity() . PHP_EOL;
        echo $list1->getProductName();
    ?>
</h3>

<h3>
    Second List:
    <?php
    //second list
    $list2 = new ShoppingList(price: 1.50, quantity: 5, productName: 'pasta');
    echo $list2->priceAsCurrency(currencySymbol: '£') . PHP_EOL . 'for' . PHP_EOL ; //passing named argument
    echo $list2->getQuantity() . PHP_EOL;
    echo $list2->getProductName();
    ?>
</h3>

<h3>
    Third List:
    <?php
    //second list
    $list3 = new ShoppingList(price: 4.50, quantity: 1, productName: 'coffee');

    echo $list3->priceAsCurrency(currencySymbol: '£') . PHP_EOL . 'for' . PHP_EOL ; //passing named argument
    echo $list3->getQuantity() . PHP_EOL;
    echo $list3->getProductName();
    
    ?>
</h3>

<h3>
    Fourth List:
    <?php
    //second list
    $list3 = new ShoppingList(price: 5.00, quantity: 2, productName: 'pizzas');

    echo $list3->priceAsCurrency(currencySymbol: '$') . PHP_EOL . 'for' . PHP_EOL ; //passing named argument
    echo $list3->getQuantity() . PHP_EOL;
    echo $list3->getProductName();
    
    ?>
</h3>

</ul>

<footer style="padding: 20px; border: 2px solid red">
   Example Footer 2023
</footer>
    
</body>
</html>
</div>