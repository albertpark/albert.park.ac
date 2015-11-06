<?
use \Organization\Module\Library;

class LibraryTest extends PHPUnit_Framework_TestCase {
    # 1 + 1 = 2
    public function testOnePlusOne() {
        $this->assertEquals(1 + 1, 2);
    }
    
    public function testLibrary() {
        $example = new Library;
        $this->assertEquals($example->whoAmI(), 'an example');
    }
}

?>