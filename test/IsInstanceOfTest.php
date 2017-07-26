<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace ZendTest\Validator;

use Zend\Validator\IsInstanceOf;

class IsInstanceOfTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|IsInstanceOf
     */
    private $isInstaceOfMock;

    public function setup()
    {
        $this->isInstaceOfMock = $this->getMockBuilder(IsInstanceOf::class)->setMethods(null)->getMock();
    }

    public function testTrueWhenSameClassInstancePassed()
    {
        $testObj = new IsInstanceOf(['className' => IsInstanceOf::class]);
        $this->assertTrue($testObj->isValid(new IsInstanceOf()));
    }

    public function testTrueWhenMockInstancePassed()
    {
        $testObj = new IsInstanceOf(['className' => IsInstanceOf::class]);
        $this->assertTrue($testObj->isValid($this->isInstaceOfMock));
    }
}
