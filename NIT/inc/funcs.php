<?php

function debug(array $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_products(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM product");
    return $res->fetchAll();
}

function get_product(int $id): array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM product WHERE item_id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function add_to_cart($product): void
{
    if (isset($_SESSION['cart'][$product['item_id']])) {
        $_SESSION['cart'][$product['item_id']]['qty'] += 1;
    } else {
        $_SESSION['cart'][$product['item_id']] = [
            'title' => $product['item_name'],
            'slug' => $product['brand'],
            'price' => $product['price'],
            'qty' => 1,
            'img' => $product['item_image'],
        ];
    }

    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['price'] : $product['price'];
}
