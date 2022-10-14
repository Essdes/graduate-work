<?php
class Product {
    const SHOW_BY_DEFAULT = 10;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT) {
        $count = intval ($count);
        $db = mysqli_connect('localhost', 'Essdes', '56768798_Essdes', 'test');
        $productsList = array();
        $result = $db ->query('SELECT item_id, item_name, price, item_image, is_new FROM product'
        . 'WHERE status = "1"'
        . 'ORDER BY id DESC'
        . 'LIMIT' . $count);
    $i=0;
    while ($row=$result->fetch()) {
        $productsList[$i]['item_id'] = $row['id'];
        $productsList[$i]['item_name'] = $row['item_name'];
        $productsList[$i]['item_image'] = $row['item_image'];
        $productsList[$i]['price'] = $row['price'];
        $productsList[$i]['is_new'] = $row['is_new'];
        $i++;
    }
    }
    return $productsList;
}
?>
