<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Test\Unit\Model\Attribute\Config;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Catalog\Model\Attribute\Config\Converter
     */
    protected $_model;

    public function setUp()
    {
        $this->_model = new \Magento\Catalog\Model\Attribute\Config\Converter();
    }

    public function testConvert()
    {
        $inputData = new \DOMDocument();
        $inputData->load(__DIR__ . '/_files/attributes_config_merged.xml');
        $expectedResult = require __DIR__ . '/_files/attributes_config_merged.php';
        $this->assertEquals($expectedResult, $this->_model->convert($inputData));
    }
}
