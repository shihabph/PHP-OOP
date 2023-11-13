<?php
class person{
	public $name, $email;
	function __construct($nm="Default Name", $em="Demo Email"){// If we use this "__construct()" function it will automatically assign value under the "show function
		##WE'VE SET A DEFAULT VALUE, if no argument is passed on the object then this shows instead of showing error
		$this->name = $nm;
		$this->email = $em;
	}

	function show(){
		echo "Your Name: " . $this->name;
		echo "<br> Your Email: ". $this->email;
		echo "<hr>";
	}

	##WE CAN USE AS MUCH FUNCTION AS WE CAN, ALL FUNCTION WILL GET THE VALUE IF WE PASS THE VALUE TO THE CONSTRUCTOR
	function display(){
		echo "Welcome : " . $this->name. "!";
		echo "<br>Your Email: ". $this->email;
		echo "<hr>";
	}
}

$object1 = new person("Shihab", "shihab.ph19205@gmail.com");// Passing the value within the function through constructor

#WE DON'T NEED TO ASSIGN THE VALUES LIKE THIS, INSTEAD WE CAN WRITE THIS.
// $object1->name = "Sample";
// $object1->email="Sample@sample.com";

$object2 = new person("Example Name", "sample@sample.com");// Passing the value within the function through constructor
$object3 = new person();// Passing the value within the function through constructor


$object1->show();//Calling the method without assigning value manually just passing it on the object.
$object2->show();

$object1->display();
$object2->display();


$object3->display();