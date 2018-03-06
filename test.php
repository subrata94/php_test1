<?php
	/*class A {
    	private $x = 1;
   	}

   	// Define a closure Pre PHP 7 code
   	$getValue = function() {
  	  return $this->x;
   	};

   	// Bind a clousure
   	$value = $getValue->bindTo(new A, 'A'); 

   	print($value()."\n");*/
 
class Person{
 private $properties;
 
 public function __get($propertyName){
 	//echo "trying to get ".$propertyName."\n";
 if(array_key_exists($propertyName, $this->properties)){

 return $this->properties[$propertyName];
 }
 
 } 
 public function __set($propertyName, $propertyValue){
 	//echo "trying to set ".$propertyName."\n";
 	$this->properties[$propertyName] = $propertyValue;
 } 
 
}
 
$p = new Person();
$p->lastName = 'John';
$p->firstName = 'Doe';
echo $p->firstName." ".$p->lastName;
//var_dump($p);

/*14546

puk 121


puk
121*/
?>

