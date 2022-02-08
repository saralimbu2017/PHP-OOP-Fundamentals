<?php include "inc/header.php"; ?>

<?php
class Person{
  //attributes
  private $name;
  //class constant
  const SPECIES = "HomoSapien";
  //static attribute
  public static $id = 1;

  //constructor method
  public function __construct($name){
    $this->name = $name;
  }

  //public methods
  public function getPersonName(){
    return "The name is:".$this->name."</br>";
  }

   //public methods 
   public function display(){

    //displaying class constant value and static attribute 
    return "The species is".Person::SPECIES. "</br>"."Id is ".self::$id."</br>";
  }



  //destructor method
  public function __destruct(){
    echo "Destroying";
  }
}
  //creating object
  $personOne = new Person("Sara");
  //$personOne->name = "Sara";
  echo $personOne->getPersonName();
  echo $personOne->display();
 
  unset($personOne);

?>

















<?php include "inc/footer.php"; ?>