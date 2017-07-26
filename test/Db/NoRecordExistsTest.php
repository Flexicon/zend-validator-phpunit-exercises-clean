<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Validator\Db;

use Zend\Validator\Db\NoRecordExists;

class NoRecordExistsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException RuntimeException
     */
    public function testThrowExceptionWhenNoAdapterPassed()
    {
        $testObj = new NoRecordExists([
            'table' => 'testTable',
            'field' => 'testField'
        ]);
        $testObj->isValid('');
    }
}
