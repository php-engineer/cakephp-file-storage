<?php
/**
 * StorageManagerTest
 *
 * @author Florian Kr�mer
 * @copyright 2012 - 2014 Florian Kr�mer
 * @license MIT
 */
namespace Burzum\FileStorage\Test\TestCase\Lib;

use Cake\TestSuite\TestCase;
use Burzum\FileStorage\Lib\StorageManager;;

class StorageManagerTest extends TestCase {
/**
 * testAdapter
 *
 * @todo more tests
 * @return void
 */
	public function testAdapter() {
		$result = StorageManager::adapter('Local');
		$this->assertEquals(get_class($result), 'Gaufrette\Filesystem');

		$result = StorageManager::activeAdapter();
		$this->assertEquals($result, 'Local');

		$result = StorageManager::activeAdapter('invalid-adapter');
		$this->assertFalse($result);

		$result = StorageManager::config();
	}
}