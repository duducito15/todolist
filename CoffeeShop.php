<?php

class CoffeeShop
{
   protected $products = [];

   public function addProducts($product = [])
   {
      $this->products = $product;
   }

   public function getProducts()
   {
      return $this->products;
   }

   public function removeProducts()
   {
      //Logica para borrar un producto
   }

   public function addToCart()
   {
      //Logica para agregar un producto al carrito de compras
   }

   public function getTotal()
   {
      //Logica para generar el total a pagar del carrito
   }

   public function viewMenu()
    {
       $menu = '';
       $menu .= 'Id' . " - " . 'Nombre' . " - " . 'Precio' . "<br>";
       $menu .= str_repeat('=', 15) . "<br>";
 
       foreach ($this->products as $product) {
          $menu .= $product['id'] . " - " . $product['name'] . " - " . $product['price'] . '<br>';
       }
 
       return $menu;
    }

}
// esto es un mensaje
?>