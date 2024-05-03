<?php

class Product {

  public $name;
  public $price;
  public $category;
  public $category_logo;
  

  
  function __construct(string $_name, float $_price, string $_category, string $_category_logo){
    
    
    $this->name=$_name;
    $this->price=$_price;
    $this->category=$_category;
    $this->category_logo=$_category_logo;
   
    

  }


}



?>