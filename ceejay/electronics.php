<?php
class electronics{
	public $name;
	public $color;
	public $use;
	public $price;
	function ElectronName($name){
		return $this->name = $name;
	}

	function ElectronColor($color){
		return $this->color = $color;
	}

	function ElectronUse($use){
		return $this->use = $use;
	}

	function ElectronPrice($price){
		return $this->price = $price;
	}
}

$television = new electronics();

$e_name = $television ->ElectronName('the name of the electronics is LG television');
$e_color = $television ->ElectronColor('the color is red');
$e_use = $television ->ElectronUse('it is use for watching movies');
$e_price = $television ->ElectronPrice('the current price is 200000 thousand naira');
echo "this is the television details";
echo "<br>";
echo $e_name;
echo "<br>";
echo $e_color;
echo "<br>";
echo $e_use;
echo "<br>";
echo $e_price;
?>