<?
require_once 'phpunit/Framework.php';
require_once 'myTask.php';
class myTaskTest extends PHPUnit_Framework_TestCase {
    public function testRevert()
    {
        $my = new MyTask();
        $this->assertEquals('а!б?в.', $my->revert('а.б?в!')); 
 }
}
