<?
abstract class animal {
	static $globalid = 0;
	private $id;
	public function __construct() {
		$this->id = self::$globalid++;
	}
	public function getId() {
		return $this->id;
	}
	public function getProduct() {
	}
	public function getType() {
		return $this->type;
	}
}
