<?php declare(strict_types=1);
namespace Example;

use Exception;

class App{
  private function is_empty($value){
    return trim($value)=="";
  }

  public function greet($name){
    if($this->is_empty($name)){
      throw new Exception("Name cannot be empty!");
    }
    return "Hello, $name";
  }

}
