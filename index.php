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

  //destructor method
  public function __destruct(){
    echo "Destroying";
  }
}
  //creating object
  $personOne = new Person("Sara");
  //$personOne->name = "Sara";
  echo $personOne->getPersonName();
  unset($personOne);

?>

















<?php include "inc/footer.php"; ?>