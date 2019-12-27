<?php

class vehicle{
  public $year;
  public $make;
  public $model;

  public function __construct($year,$make,$model){
    $this->year=$year;
    $this->make=$make;
    $this->model=$model;
  }

  public function display(){
    return $this->year . " " .$this->make . " " .$this->model;
  }
}

class truck extends vehicle{
   public $type;

   public function __construct($year,$make,$model,$type)
   {
    parent::__construct($year,$make,$model); 
    $this->type=$type;
   }
   public function display()
   {
      return parent::display() . "(" . $this->type .")";
   }
}
interface iVehicleFactory{
  public function createCar();
  public function createTruck();
}

class FordFactory implements iVehicleFactory{
  public function createCar(){
    return new vehicle("2013","Ford","Mustang");
  }
  public function createTruck(){
    return new truck("2013","Ford","F-150","4*4");
  }
}

class ChevyFactory implements iVehicleFactory{
  public function createCar(){
    return new vehicle("2013","Chevy","Corvette");
  
  }
  public function createTruck()
  {
    return new truck("2013","Chevy","Silverado","Half-Ton");
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
 <?php
if(isset($_REQUEST["make"])){
  $vehicle;
  switch($_REQUEST["make"]){
    case "Ford":
      $vehicle= new FordFactory();
    break;
    case "Chevy":
      $vehicle= new ChevyFactory();
    break;
  }
  $car=$vehicle->createCar();
  $trunk=$vehicle->createTruck();
  echo "汽车的基本信息" . $car->display(). "</br>";
  echo "汽车的基本类型" . $trunk->display(). "</br>";

} 
?>
<form action="<?=$_SERVER['PHP_SELF']?>">
 <select name="make" id="">
   <option value="Ford">Ford</option>
   <option value="Chevy">Chevy</option>
 </select>
 <input type="submit" value="Go">
</form> 
</body>
</html>