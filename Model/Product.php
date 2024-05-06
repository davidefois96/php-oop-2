<?php

require_once __DIR__ .'/Category.php';

class Product {

  use Category;
  private $name;
  public $price;
  
  

  
  function __construct(string $_name, float $_price, string $_category_name, string $_category_logo){
    
    
    $this->setName($_name);
    $this->price=$_price;
    $this->category_name=$_category_name;
    $this->category_logo=$_category_logo;
   
    

  }

  public function setName($_name){

    if(empty($_name) || strlen($_name) < 3 || is_numeric($_name)){
      throw new Exception('Il nome deve contenere almeno 3 caratteri e non essere un numero');
    }
   
    $this->name = $_name;
  }

  public function getName(){

    return $this->name;
  }




}



?>