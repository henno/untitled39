<?php

require 'vendor/autoload.php';
class_alias('\RedBeanPHP\R', '\R');

$cfg['DATABASE_DATABASE'] = 'redbean';
$cfg['DATABASE_HOSTNAME'] = '127.0.0.1';
$cfg['DATABASE_USERNAME'] = 'root';
$cfg['DATABASE_PASSWORD'] = 'root';


\R::setAutoResolve(TRUE);
\R::setup("mysql:host=$cfg[DATABASE_HOSTNAME];dbname=$cfg[DATABASE_DATABASE]", $cfg['DATABASE_USERNAME'], $cfg['DATABASE_PASSWORD']);
\R::exec("SET sql_mode = ''");


//$shop = R::dispense('shop');
//$shop->name = 'Antiques';
//$vase = R::dispense('product');
//$vase->price = 25;
//$shop->ownProductList[] = $vase;
//R::store($shop);


$shop = R::load('shop', 1);
?>

<table>

    <?php foreach ($shop->ownProductList as $product): ?>
        <tr>
            <td>
                <?= $product->name ?>
            </td>
            <td>
                <?= $product->price ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
