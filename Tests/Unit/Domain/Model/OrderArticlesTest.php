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
 * Test case for class Tx_GrbCommerceOrder_Domain_Model_OrderArticles.
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
class Tx_GrbCommerceOrder_Domain_Model_OrderArticlesTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbCommerceOrder_Domain_Model_OrderArticles
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbCommerceOrder_Domain_Model_OrderArticles();
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
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getPriceNetReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPriceNet()
		);
	}

	/**
	 * @test
	 */
	public function setPriceNetForIntegerSetsPriceNet() { 
		$this->fixture->setPriceNet(12);

		$this->assertSame(
			12,
			$this->fixture->getPriceNet()
		);
	}
	
	/**
	 * @test
	 */
	public function getPriceGrossReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPriceGross()
		);
	}

	/**
	 * @test
	 */
	public function setPriceGrossForIntegerSetsPriceGross() { 
		$this->fixture->setPriceGross(12);

		$this->assertSame(
			12,
			$this->fixture->getPriceGross()
		);
	}
	
	/**
	 * @test
	 */
	public function getAmountReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getAmount()
		);
	}

	/**
	 * @test
	 */
	public function setAmountForIntegerSetsAmount() { 
		$this->fixture->setAmount(12);

		$this->assertSame(
			12,
			$this->fixture->getAmount()
		);
	}
	
	/**
	 * @test
	 */
	public function getArticleTypeUidReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getArticleTypeUid()
		);
	}

	/**
	 * @test
	 */
	public function setArticleTypeUidForIntegerSetsArticleTypeUid() { 
		$this->fixture->setArticleTypeUid(12);

		$this->assertSame(
			12,
			$this->fixture->getArticleTypeUid()
		);
	}
	
	/**
	 * @test
	 */
	public function getArticleNumberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setArticleNumberForStringSetsArticleNumber() { 
		$this->fixture->setArticleNumber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getArticleNumber()
		);
	}
	
	/**
	 * @test
	 */
	public function getSubtitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSubtitleForStringSetsSubtitle() { 
		$this->fixture->setSubtitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSubtitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getTaxReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getTax()
		);
	}

	/**
	 * @test
	 */
	public function setTaxForFloatSetsTax() { 
		$this->fixture->setTax(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getTax()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrderUidReturnsInitialValueForObjectStorageContainingTx_GrbCommerceOrder_Domain_Model_Order() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getOrderUid()
		);
	}

	/**
	 * @test
	 */
	public function setOrderUidForObjectStorageContainingTx_GrbCommerceOrder_Domain_Model_OrderSetsOrderUid() { 
		$orderUid = new Tx_GrbCommerceOrder_Domain_Model_Order();
		$objectStorageHoldingExactlyOneOrderUid = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneOrderUid->attach($orderUid);
		$this->fixture->setOrderUid($objectStorageHoldingExactlyOneOrderUid);

		$this->assertSame(
			$objectStorageHoldingExactlyOneOrderUid,
			$this->fixture->getOrderUid()
		);
	}
	
	/**
	 * @test
	 */
	public function addOrderUidToObjectStorageHoldingOrderUid() {
		$orderUid = new Tx_GrbCommerceOrder_Domain_Model_Order();
		$objectStorageHoldingExactlyOneOrderUid = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneOrderUid->attach($orderUid);
		$this->fixture->addOrderUid($orderUid);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneOrderUid,
			$this->fixture->getOrderUid()
		);
	}

	/**
	 * @test
	 */
	public function removeOrderUidFromObjectStorageHoldingOrderUid() {
		$orderUid = new Tx_GrbCommerceOrder_Domain_Model_Order();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($orderUid);
		$localObjectStorage->detach($orderUid);
		$this->fixture->addOrderUid($orderUid);
		$this->fixture->removeOrderUid($orderUid);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getOrderUid()
		);
	}
	
}
?>