<?php include "inc/header.php"; ?>

<?php
class Person{
  //attributes
  public $name;

  //public methods
  public function getPersonName(){
    return "The name is:".$this->name;
  }
}
  //creating object
  $personOne = new Person;
  $personOne->name = "Sara";
  echo $personOne->getPersonName();


?>

















<?php include "inc/footer.php"; ?>