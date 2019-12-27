<?php
class vehicle{
  public $year;
  public $make;
  public $model;

  private function __construct($year,$make,$model){
    $this->year=$year;
    $this->make=$make;
    $this->model=$model;
  }

  public static function createFord($Year,$Model){
    return new vehicle($Year,"Ford",$Model);
  }

  public static function createChevy($Year,$Model){
    return new vehicle($Year,"Chevy",$Model);
  }

  public function display(){
    return $this->year . " " .$this->make . " " . $this->model;
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
if(isset($_REQUEST["make"])){
  $vehicle;
  switch($_REQUEST["make"]){
    case "Ford":
      $vehicle= vehicle::createFord(2013,"Mustang");
    break;
    case "Chevy":
      $vehicle=vehicle::createChevy(2013,"Corvette");
    break;
  }
  echo "汽车" . $vehicle->display(). "</br>";

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