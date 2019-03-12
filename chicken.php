<?
class chicken extends animal {
	protected $type = 'chicken';
		public function getProduct() {
		return ['egg' => rand(0,1)]; 
	}
}
