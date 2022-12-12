<?php
require_once ('pdo.php');

/**
 * @param int $id
 * @return array
 */

function selectItemByQuickPayment() {
  $sql = "SELECT * FROM `cart` INNER JOIN `products` ON `cart`.`id_product` = `products`.`id_product` WHERE `cart`.`quick_payment` = 1";
  return query($sql);
}

/**
 * @param int $id
 * @return array
 */

function selectItemByIdUser($id) {
  $sql = "SELECT * FROM `cart` INNER JOIN `products` ON `cart`.`id_product` = `products`.`id_product` WHERE `cart`.`id_user` = $id";
  return query($sql);
}


/**
 * @param int $id
 * @return array
 */

function getListItemProductByIdUser($id) {
  $sql = "SELECT * FROM `cart` INNER JOIN `products` ON `cart`.`id_product` = `products`.`id_product` WHERE `cart`.`id_user` = $id LIMIT 3";
  return query($sql);
};


/**
 * @return array
 */

function countItemCart() {
  $sql = "SELECT COUNT(id_cart) AS quantity FROM `cart`";
  return query($sql);
}


/**
 * @param int $id_product
 * @param int $id_user
 * @return array
 */

function checkExistItem($id_product, $id_user) {
  $sql = "SELECT * FROM `cart` WHERE `id_product` = $id_product AND `id_user` = $id_user";
  return query($sql, $id_product, $id_user);
}


/**
 * @param int $quantity
 * @param int $id_product
 */

function updateQuantity($quantity, $id_product) {
  $sql = "UPDATE `cart` SET `quantity`= $quantity WHERE `id_product` = $id_product";
  execute($sql, $quantity, $id_product);
}

/**
 * @param int $id_product
 */

function updateQuickPayment($id_product) {
  $sql = "UPDATE `cart` SET `quick_payment`=1 WHERE `id_product`=$id_product";
  execute($sql, $id_product);
}


/**
 * @param int $quantity
 * @param int $id_product
 */

function insertCart($id_user, $id_product, $quantity) {
  $sql = "INSERT INTO `cart`(`id_user`, `id_product`, `quantity`) VALUES (?,?,?)";
  execute($sql, $id_user, $id_product, $quantity);
}
