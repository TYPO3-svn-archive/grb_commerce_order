<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_GrbCommerceOrder_Domain_Model_Order.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Commerce Order
 *
 * @author Juerg Langhard <langhard@greenbanana.ch>
 */
class Tx_GrbCommerceOrder_Domain_Model_OrderTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbCommerceOrder_Domain_Model_Order
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbCommerceOrder_Domain_Model_Order();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getOrderIdReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrderIdForStringSetsOrderId() { 
		$this->fixture->setOrderId('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrderId()
		);
	}
	
	/**
	 * @test
	 */
	public function getSumPriceNetReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSumPriceNet()
		);
	}

	/**
	 * @test
	 */
	public function setSumPriceNetForIntegerSetsSumPriceNet() { 
		$this->fixture->setSumPriceNet(12);

		$this->assertSame(
			12,
			$this->fixture->getSumPriceNet()
		);
	}
	
	/**
	 * @test
	 */
	public function getSumPriceGrossReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getSumPriceGross()
		);
	}

	/**
	 * @test
	 */
	public function setSumPriceGrossForIntegerSetsSumPriceGross() { 
		$this->fixture->setSumPriceGross(12);

		$this->assertSame(
			12,
			$this->fixture->getSumPriceGross()
		);
	}
	
	/**
	 * @test
	 */
	public function getCustFeuserReturnsInitialValueForTx_GrbCommerceOrder_Domain_Model_FeUser() { }

	/**
	 * @test
	 */
	public function setCustFeuserForTx_GrbCommerceOrder_Domain_Model_FeUserSetsCustFeuser() { }
	
}
?>