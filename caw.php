<?
class caw extends animal {
	protected $type = 'caw';
	public function getProduct() {
		return ['milk' => rand(8,12)];
	}
}
