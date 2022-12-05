<?php
require_once ('pdo.php');

/**
 * @param $id
 * @return array
 */

function selectItemByIdUser($id) {
  $sql = "SELECT * FROM `cart` INNER JOIN `products` ON `cart`.`id_product` = `products`.`id_product` WHERE `cart`.`id_user` = $id";
  return query($sql);
}


/**
 * @param $id
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



// function insertComment($content, $id_product, $id_user) {
//   $createAt = date('Y-m-d');
//   $sql = "INSERT INTO `comment`(`content`, `id_product`, `id_user`, `create_at`) VALUES (?,?,?,?)";
//   execute($sql, $content, $id_product, $id_user, $createAt);
// }
