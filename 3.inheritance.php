<?php
class fruits
{
	public $sweet, $sour;
	function __construct($sw, $so)
	{
		$this->sweet = $sw;
		$this->sour = $so;
	}
	function slice()
	{
		echo "Sweet Fruit : " . $this->sweet . "<br>";
		echo "Sour Fruit : " . $this->sour . "<br>";
	}
}
class salad extends fruits
{
	function __construct()
	{
		echo "salar Peparing";
	}
	public function prepare_salad()
	{
		echo "<br>Adding Fruits to Salad are" . $this->sweet . "and". $this->sour;
	}
}
class shop extends salad
{
}

$fruitObject = new fruits("Apple", "Lemon");
$fruitObject->slice();
$saladObject = new salad();
$saladObject = prepare_salad();
die;

$shopObject = new shop();
