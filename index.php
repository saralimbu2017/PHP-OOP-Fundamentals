<?php include "inc/header.php"; ?>

<?php
class Person{
  public $name;

  public function getPersonName(){
    return "The name is:".$this->name;
  }
}
  $personOne = new Person;
  $personOne->name = "Sara";
  echo $personOne->getPersonName();


?>

















<?php include "inc/footer.php"; ?>