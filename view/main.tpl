<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $title; ?></title>
        <base href="<?php echo $base; ?>" />

        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    </head>
    <body>
        <div id="container">
            <div id="content">
                <div class="product-list">
                    <?php foreach($products as $product): ?>
                        <div class="productBox">
                            <div class="productBox_inner">
                                <div class="name">
                                    <?php echo $product['name']?>
                                </div>
                                <div class="image">
                                    <img align="none" alt="" src="images/example.png">
                                </div>
                                <div class="product_pc specproduct_pc">
                                    <div class="price">
                                        <?php echo $product['price']?> руб.
                                    </div>
                                    <div class="cart buttonController specButton">
                                        <form action="" method="post">
                                            <input type="hidden" name="product_id" value="<?php echo $product['id']?>">
                                            <input type="submit" class="button" value="Купить">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="cart">
                    <?php if(isset($cart['discounts'])): ?>
                    <ul>
                        <?php foreach($cart['discounts'] as $key => $value): ?>
                        <li>
                            <span class="group">Скидка на группу: <b><?php echo $key; ?></b></span>
                            <ul>
                                <?php foreach($value as $key => $obj): ?>
                                <li><?php echo $key; ?>: <?php echo $obj; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <br>
                    <?php if(count($cart['products']) > 0): ?>
                    <ul>
                        <?php foreach($cart['products'] as $key => $value): ?>
                        <li>Товар: <?php echo $key; ?></li>
                        <li>Цена: <?php echo $value['price']; ?></li>
                        <li>Кол-во: <?php echo $value['count']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <br>
                    <?php if(isset($cart['exception'])): ?>
                    <ul>
                        <?php foreach($cart['exception'] as $key => $value): ?>
                        <li>Товар: <?php echo $key; ?></li>
                        <li>Цена: <?php echo $value['price']; ?></li>
                        <li>Кол-во: <?php echo $value['count']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <?php if(isset($cart['total_price'])): ?>
                    <ul>
                        <li>Итоговая цена: <?php echo $cart['total_price']; ?></li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>