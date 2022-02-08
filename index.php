<?php include "inc/header.php"; ?>

<?php
class Person{
  //attributes
  private $name;

  //constructor method
  public function __construct($name){
    $this->name = $name;
  }

  //public methods
  public function getPersonName(){
    return "The name is:".$this->name;
  }
}
  //creating object
  $personOne = new Person("Sara");
  //$personOne->name = "Sara";
  echo $personOne->getPersonName();


?>

















<?php include "inc/footer.php"; ?>