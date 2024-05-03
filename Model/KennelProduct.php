<?php

class KennelProduct extends Product {

  public $dimensions;
  public $poster;


  

  
  function __construct(string $_name, float $_price,string $_category,string $_category_logo, array $_dimensions,string $_poster){
    

    parent::__construct($_name,$_price,$_category,$_category_logo,);
    

    $this->dimensions=$_dimensions;
    $this->poster=$_poster;
    
   
  }


}



?>