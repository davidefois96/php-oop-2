<?php

class Kennel extends Product {

  public $dimensions;
  public $poster;
  public $animal;

  

  
  function __construct(string $_name, float $_price, array $_dimensions,string $_poster,ANIMAL $_animal ){
    

    parent::__construct($_name,$_price);
    

    $this->dimensions=$_dimensions;
    $this->poster=$_poster;
    $this->animal=$_animal;
   
  }


}



?>