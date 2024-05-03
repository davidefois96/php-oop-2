<?php

class FoodProduct extends Product {

  public $ingredients;
  public $weight;
  public $poster;
 

  

  
  function __construct(string $_name, float $_price, string $_category,string $_category_logo, array $_ingredients, float $_weight, string $_poster){
    

    parent::__construct($_name,$_price,$_category,$_category_logo);
    

    $this->ingredients=$_ingredients;
    $this->weight=$_weight;
    $this->poster=$_poster;
    

   
  }


}



?>