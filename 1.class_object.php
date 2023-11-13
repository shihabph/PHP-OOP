<?php
class calculation{
	public $a, $b, $c;// Defining Class Properties
	function sum(){ //Defining Methods
		$this->c = $this->a + $this->b;
		return $this->c;
	}
	function sub(){
		$this->c = $this->a - $this->b;
		return $this->c;
	}
}


$object1 = new calculation(); //Creating Object

$object1->a = 10.67; //Assigning Values on the Properties
$object1->b = 20.12;

$object2 = new calculation();
$object2->a = 54.45;
$object2->b = 22.13;


echo 'Summation of the values in object1 : '. $object1->sum(); //Displaying Object with specific method
echo "<br>";
echo 'Subtraction of the values  in object2 : ' . $object2->sub();


echo "<hr>";
## WE CAN CALL THE OBJECTS FOR ALL THE METHODS DEFINED ON THE CLASSES. LIKE THE EXAMPLE BELOW:

echo 'For Object 2: '. $object2->sum();
echo "<br>";
echo 'For Object 1: '. $object1->sub();
