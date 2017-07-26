<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
namespace ZendTest\Validator;

use Zend\Validator\Barcode;
use Zend\Validator\Barcode\AbstractAdapter;
use Zend\Validator\IsInstanceOf;

class BarcodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|AbstractAdapter
     */
    private $abstractAdapterMock;

    public function setup() {
        $this->abstractAdapterMock = $this->getMockBuilder(AbstractAdapter::class)
            ->setMethods(array(
                'getLength',
                'hasValidLength'
            ))->getMock();
    }

    public function testGetLengthCalledAtleastOnce() {
        $this->abstractAdapterMock->expects($this->atLeastOnce())->method('getLength')->willReturn(10);
        $testObj = new Barcode($this->abstractAdapterMock);
        $this->assertFalse($testObj->isValid('Test'));
    }

    public function testHasValidLengthReceivesValueThroughIsValid() {
        $value = 'Test';
        $this->abstractAdapterMock->expects($this->atLeastOnce())->method('hasValidLength')->with($value)->willReturn(10);
        $testObj = new Barcode($this->abstractAdapterMock);
        $this->assertFalse($testObj->isValid($value));
    }
}
