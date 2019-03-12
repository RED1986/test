<?
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});
class barb {
	private $animals;
	private $products;
	public function addAnimal(animal $animal)
	{
		$this->animals[] = $animal;
	}
	public function listAnimals() {
		foreach ($this->animals as $animal) {
		printf($animal->getType().' id:'.$animal->getId());
		echo "<br>";
		}
	}
	public function getProducts() {
		foreach ($this->animals as $animal) {
			foreach ($animal->getProduct() as $product => $value) {
			$this->products[$product] += $value;
			
			}
		}
	}
	public function listProducts() {
		print_r($this->products);
	}
	
}
$barb = new barb();
for ($i = 0; $i < 20; $i++) {
	$barb->addAnimal(new chicken());
}
for ($i = 0; $i < 10; $i++) {
	$barb->addAnimal(new caw());
}

$barb->listAnimals();
$barb->getProducts();
$barb->listProducts();
