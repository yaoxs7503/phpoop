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
    return $this->year . " " . $this->make . " " .$this->model;
  }
}

abstract class vehicleBuilder{
  abstract function getVehicle();
}

abstract class carDirector
{
  abstract function getCar();
}
/**
 * 交通工具 class
 */
class carBuilder extends vehicleBuilder{
  private $car;

  public function __construct(){
    $this->car =new vehicle(NULL,NULL,NULL);
  }

  public function setYear($year){
    $this->car->year=$year;
  }

  public function setMake($make){
    $this->car->make=$make;
  }
  public function setModel($model){
    $this->car->model=$model;
  }
  public function getVehicle()
  {
    return $this->car;
  }
}

class corvetteDirector extends carDirector{
  private $corvetteBuilder;

  /**
   * 运用组合 CarBuilder
   */
  public function __construct(){
    $this->corvetteBuilder=new carBuilder();
    $this->corvetteBuilder->setYear(2013);
    $this->corvetteBuilder->setMake("Chevy");
    $this->corvetteBuilder->setModel("Corvette");
  }

  public function getCar(){
    return $this->corvetteBuilder->getVehicle();
  }
}

class mustangDirector extends carDirector{
  private $mustangBuilder;
  public function __construct(){
    $this->mustangBuilder=new carBuilder();
    $this->mustangBuilder->setYear(2013);
    $this->mustangBuilder->setMake("Ford");
    $this->mustangBuilder->setModel("Mustang");
    // $this->mustangBuilder->setYear(2014);
    // $this->mustangBuilder->setMake("国产");
    // $this->mustangBuilder->setModel("国产汽车");
  }
  public function getCar(){
    return $this->mustangBuilder->getVehicle();
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
<?php
/**
 *  切记要将case 和 break 相互作用;
 */
if(isset($_REQUEST["make"])){
  $director;
  switch($_REQUEST["make"]){
    case "Ford":
      $director=new mustangDirector();
    break;
    case "Chevy":
      $director=new corvetteDirector();
    break;
  }
//  var_dump($director->getCar()->display());
echo $director->getCar()->display();
}


?>
<body>

  <form action="<?=$_SERVER['PHP_SELF']?>">
 <select name="make" id="">
   <option value="Ford">Ford</option>
   <option value="Chevy">Chevy</option>
 </select>
 <input type="submit" value="Go">
</form> 
</body>
</html>