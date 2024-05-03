<?php

class Food extends Product {

  public $ingredients;
  public $weight;
  public $poster;
  public $animal;

  

  
  function __construct(string $_name, float $_price, array $_ingredients, float $_weight, string $_poster, ANIMAL $_animal ){
    

    parent::__construct($_name,$_price);
    

    $this->ingredients=$_ingredients;
    $this->weight=$_weight;
    $this->poster=$_poster;
    $this->animal=$_animal;

   
  }


}



?>