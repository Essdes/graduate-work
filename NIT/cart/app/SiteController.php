<?php
    include_once ROOT . 'Product.php';
    // include_once ROOT . 'Category.php';

    class SiteController {
        public function actionIndex() {
            // $categories = array();
            // $categories = Category::getCategoriesList();

            $latestProducts = array();
            $latestProducts = Product::getLatestProducts(3);

            require_once(ROOT . 'angry-cats.js.php') // ПЕРЕИМЕНОВАТЬ ОБЯЗАТЕЛЬНО
            return true;
        }
    }
?>
