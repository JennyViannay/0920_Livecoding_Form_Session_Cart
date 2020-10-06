<?php

function addArticle($article)
{
    if(!empty($_SESSION['cart'][$article])){
        $_SESSION['cart'][$article]++;
    } else {
        $_SESSION['cart'][$article] = 1;
    }
}

function removeArticle($article)
{
    $panier = $_SESSION['cart'];
    if(!empty($panier[$article])){
        unset($panier[$article]);
    }
    $_SESSION['cart'] = $panier;
}

function getCartItems()
{
    $panier = $_SESSION['cart'];
    $panierInfos = [];
    foreach($panier as $article => $quantity){
        $panierInfos[] = [
            'product' => $article,
            'quantity' => $quantity
        ];
    }
    return $panierInfos;
}

function getTotalCart()
{
    $total = 0;
    foreach (getCartItems() as $item){
        $total += $item['quantity'] * 270;
    }
    return $total;
}
